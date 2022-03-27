<?php

use App\Http\Livewire\Card;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Order;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\Shop;
use App\Http\Livewire\SignUp;
use App\Http\Livewire\ThankYou;
use App\Http\Livewire\User\MyOrder;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/card', Card::class)->name('card');
    Route::get('/order', Order::class)->name('order');
    Route::get('/my-order', MyOrder::class)->name('my_order');
    Route::get('/thank-you', ThankYou::class)->name('thankyou');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', SignUp::class)->name('signup');
    Route::get('/login', Login::class)->name('login');
});

Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/shop', Shop::class)->name('shop');
Route::get('/single-product/{slug}', ProductDetail::class)->name('product_detail');
require __DIR__ . '/admin.php';
