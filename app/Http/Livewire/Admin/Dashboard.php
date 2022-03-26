<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Subscribe;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalCategory;
    public $totalBrand;
    public $totalProducts;
    public $totalUsers;
    public $totalSubscibers;
    public $totalReviews;
    public function render()
    {
        $this->totalCategory = Category::count();
        $this->totalBrand = Brand::count();
        $this->totalProducts = Product::count();
        $this->totalUsers = User::count();
        $this->totalSubscibers = Subscribe::count();
        $this->totalReviews = Review::count();
        return view('livewire.admin.dashboard')->layout('layout.admin-app');
    }
}
