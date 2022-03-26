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

    public $product_id;
    public $edit_title;
    public $edit_cat_id;
    public $edit_brand_id;
    public $edit_short_desc;
    public $edit_long_desc;
    public $edit_stock;
    public $old_image;
    public $new_image;
    public $brands;
    public $categories;
    public $search;
    public $totalProducts;
    public function render()
    {
        $this->brands = Brand::orderBy('id', 'desc')->get();
        $this->categories = Category::orderBy('id', 'desc')->get();
        $this->totalProducts = ModelsProduct::count();
        if ($this->search != "") {
            $products = ModelsProduct::where('title', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
            return view('livewire.admin.product', compact('products'))->layout('layout.admin-app');
        }
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
    public function resetField()
    {
        $this->title;
        $this->cat_id;
        $this->brand_id;
        $this->short_desc;
        $this->long_desc;
        $this->price;
        $this->stock;
        $this->slug;
        $this->image;

        $this->product_id;
        $this->edit_title;
        $this->edit_cat_id;
        $this->edit_brand_id;
        $this->edit_short_desc;
        $this->edit_long_desc;
        $this->edit_stock;
        $this->old_image;
        $this->new_image;
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
        $products->views = 10;
        $products->stock = $this->stock;
        $products->slug = Str::slug($this->title);
        $products->image = $filename;
        $result = $products->save();
        if ($result) {
            session()->flash('success', 'Product Add Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }
    public function edit($id)
    {
        $this->showTable = false;
        $this->updateForm = true;
        $products = ModelsProduct::findOrFail($id);
        $this->product_id = $products->id;
        $this->edit_title = $products->title;
        $this->edit_cat_id = $products->cat_id;
        $this->edit_brand_id = $products->brand_id;
        $this->edit_long_desc = $products->long_desc;
        $this->edit_short_desc = $products->short_desc;
        $this->edit_price = $products->price;
        $this->edit_stock = $products->stock;
        $this->old_image = $products->image;
    }
    public function update($id)
    {
        $products = ModelsProduct::findOrFail($id);
        $this->validate([
            'edit_title' => ['required', 'string', 'max:100', 'min:10'],
            'edit_cat_id' => ['required'],
            'edit_brand_id' => ['required'],
            'edit_long_desc' => ['required', 'string', 'max:5000',],
            'edit_short_desc' => ['required', 'string', 'max:1000'],
            'edit_price' => 'required',
            'edit_stock' => 'required',
        ]);

        $filename = "";
        $destination = public_path('storage\\' . $products->image);
        if ($this->new_image != "") {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_image->store('products', 'public');
        } else {
            $filename = $this->old_image;
        }
        $products->title = $this->edit_title;
        $products->cat_id = $this->edit_cat_id;
        $products->brand_id = $this->edit_brand_id;
        $products->long_desc = $this->edit_long_desc;
        $products->short_desc = $this->edit_short_desc;
        $products->price = $this->edit_price;
        $products->stock = $this->edit_stock;
        $products->slug = Str::slug($this->edit_title);
        $products->image = $filename;
        $result = $products->save();
        if ($result) {
            session()->flash('success', 'Product Update Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }
    public function delete($id)
    {
        $products = ModelsProduct::findOrFail($id);

        $destination = public_path('storage\\' . $products->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $result = $products->delete();
        if ($result) {
            session()->flash('success', 'Product Delete Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }
}
