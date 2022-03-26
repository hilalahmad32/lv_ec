<?php

use App\Http\Livewire\Admin\Brand;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\ChangePassword;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Login as AdminLogin;
use App\Http\Livewire\Admin\Product;
use App\Http\Livewire\Admin\Review;
use App\Http\Livewire\Admin\User;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', AdminLogin::class)->name('admin-login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/category', Category::class)->name('category');
        Route::get('/brand', Brand::class)->name('brand');
        Route::get('/product', Product::class)->name('product');
        Route::get('/reviews', Review::class)->name('review');
        Route::get('/users', User::class)->name('users');
        Route::get('/change-password', ChangePassword::class)->name('change-password');
    });
});
