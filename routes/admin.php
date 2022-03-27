<?php

use App\Http\Livewire\Admin\Brand;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\ChangePassword;
use App\Http\Livewire\Admin\Contact;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Login as AdminLogin;
use App\Http\Livewire\Admin\Order;
use App\Http\Livewire\Admin\Product;
use App\Http\Livewire\Admin\Review;
use App\Http\Livewire\Admin\Setting;
use App\Http\Livewire\Admin\User;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', AdminLogin::class)->name('admin-login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
        Route::get('/category', Category::class)->name('admin.category');
        Route::get('/brand', Brand::class)->name('admin.brand');
        Route::get('/product', Product::class)->name('admin.product');
        Route::get('/reviews', Review::class)->name('admin.review');
        Route::get('/users', User::class)->name('admin.users');
        Route::get('/order', Order::class)->name('admin.order');
        Route::get('/setting', Setting::class)->name('admin.setting');
        Route::get('/contact', Contact::class)->name('admin.contact');
        Route::get('/change-password', ChangePassword::class)->name('admin.change-password');
    });
});
