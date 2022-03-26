<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $popularProducts;
    public $ratedProducts;
    public function render()
    {
        $this->popularProducts = Product::where('views', '>', 0)->limit(6)->get();
        $this->ratedProducts = Product::orderBy('id', 'DESC')->limit(6)->get();
        return view('livewire.home')->layout('layout.app');
    }
}
