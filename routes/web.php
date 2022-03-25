<?php

use App\Http\Livewire\Card;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\Shop;
use App\Http\Livewire\SignUp;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/card', Card::class)->name('card');
});

// Route::group(['middleware' => 'guest'], function () {
Route::get('/signup', SignUp::class)->name('signup');
Route::get('/login', Login::class)->name('login');
// });

Route::get('/', Home::class)->name('home');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/single-product/{id}', ProductDetail::class)->name('product_detail');
