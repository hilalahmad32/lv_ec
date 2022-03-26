<?php

use App\Http\Livewire\Admin\Brand;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Product;
use App\Http\Livewire\Admin\Review;
use App\Http\Livewire\Admin\User;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/category', Category::class)->name('category');
    Route::get('/brand', Brand::class)->name('brand');
    Route::get('/product', Product::class)->name('product');
    Route::get('/reviews', Review::class)->name('review');
    Route::get('/users', User::class)->name('users');
});
