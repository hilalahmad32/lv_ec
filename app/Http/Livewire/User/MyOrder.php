<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyOrder extends Component
{

    public $orders;
    public function render()
    {
        $this->orders = Order::where('user_id', Auth::user()->id)->get();
        return view('livewire.user.my-order')->layout('layout.app');
    }
}
