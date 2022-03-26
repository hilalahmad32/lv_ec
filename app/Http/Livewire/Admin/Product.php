<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Product extends Component
{
    public $showTable = true;
    public $createForm = false;
    public $updateForm = false;

    public $title;
    public $cat_id;
    public $brand_id;
    public $short_desc;
    public $long_desc;
    public $price;
    public $stock;
    public $slug;
    public $image;
    public $brands;
    public $categories;
    public function render()
    {
        $this->brands = Brand::orderBy('id', 'desc')->get();
        $this->categories = Category::orderBy('id', 'desc')->get();
        $products = ModelsProduct::orderBy('id', 'desc')->get();
        return view('livewire.admin.product', compact('products'))->layout('layout.admin-app');
    }

    public function showForm()
    {
        $this->showTable = false;
        $this->createForm = true;
    }

    public function goBack()
    {
        $this->showTable = true;
        $this->createForm = false;
        $this->updateForm = false;
    }
    use WithFileUploads;
    public function store()
    {
        $products = new ModelsProduct();
        $this->validate([
            'title' => ['required', 'string', 'max:100', 'min:10', 'unique:products'],
            'cat_id' => ['required'],
            'brand_id' => ['required'],
            'long_desc' => ['required', 'string', 'max:5000',],
            'short_desc' => ['required', 'string', 'max:1000'],
            'price' => 'required',
            'stock' => 'required',
            'image' => ['required'],
        ]);

        $filename = "";
        if ($this->image != "") {
            $filename = $this->image->store('products', 'public');
        } else {
            $filename = "null";
        }
        $products->title = $this->title;
        $products->cat_id = $this->cat_id;
        $products->brand_id = $this->brand_id;
        $products->long_desc = $this->long_desc;
        $products->short_desc = $this->short_desc;
        $products->price = $this->price;
        $products->views = 0;
        $products->stock = $this->stock;
        $products->slug = Str::slug($this->title);
        $products->image = $filename;
        $products->save();
        $this->goBack();
    }

    public function delete($id)
    {
        $products = ModelsProduct::findOrFail($id);

        $destination = public_path('storage\\' . $products->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $products->delete();
    }
}
