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
    public $value1;
    public $value2;
    public function render()
    {
        $this->categorys = Category::orderBy('id', 'DESC')->get();
        $this->brands = Brand::orderBy('id', 'DESC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(6);
        if ($this->category_id) {
            $products = Product::where('cat_id', $this->category_id)->orderBy('id', 'DESC')->paginate(6);
        }

        return view('livewire.shop', compact('products'))->layout('layout.app');
    }

    public function getProuductByCat($id)
    {
        $this->category_id = $id;
    }

    // public function getProuductByPrice($val1, $val2)
    // {
    //     $this->value1 = $val1;
    //     $this->value2 = $val2;
    // }
}
