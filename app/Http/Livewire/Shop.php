<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{

    public $categorys;
    public $brands;
    use WithPagination;
    public $category_id;
    public $brand_id;
    public $page = 1;
    public $value1;
    public $value2;
    public function render()
    {
        $this->categorys = Category::orderBy('id', 'DESC')->get();
        $this->brands = Brand::orderBy('id', 'DESC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate($this->page);
        if ($this->category_id) {
            $products = Product::where('cat_id', $this->category_id)->orderBy('id', 'DESC')->paginate($this->page);
        }
        if ($this->brand_id) {
            $products = Product::where('brand_id', $this->brand_id)->orderBy('id', 'DESC')->paginate($this->page);
        }


        return view('livewire.shop', compact('products'))->layout('layout.app');
    }

    public function getProuductByCat($id)
    {
        $this->category_id = $id;
    }
    public function getProuductByBrand($id)
    {
        $this->brand_id = $id;
    }

    public function loadMore()
    {
        $this->page++;
    }
}
