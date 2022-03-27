<?php

namespace App\Http\Livewire;

use App\Models\AddToCard;
use App\Models\Order as ModelsOrder;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public $totalCards;
    public $totalPrice;

    public $user_id;
    public $pro_id;
    public $email;
    public $name;
    public $address;
    public $city;
    public $privonce;
    public $postal_code;
    public $phone;
    public function mount()
    {
        $this->totalPrice = AddToCard::where(['user_id' => Auth::user()->id])->sum('total_price');
    }
    public function render()
    {
        $this->totalCards = AddToCard::where('user_id', Auth::user()->id)->get();
        return view('livewire.order')->layout('layout.app');
    }

    public function submitOrder()
    {
        $orders = new ModelsOrder();

        $validate = $this->validate([
            'email' => ['required', 'email', 'max:30', 'min:10'],
            'name' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'privonce' => ['required'],
            'postal_code' => ['required'],
            'phone' => ['required'],
        ]);
        $orders->user_id = Auth::user()->id;
        $orders->email = $this->email;
        $orders->name = $this->name;
        $orders->address = $this->address;
        $orders->city = $this->city;
        $orders->privonce = $this->privonce;
        $orders->postal_code = $this->postal_code;
        $orders->phone = $this->phone;
        $orders->save();
        $AddToCards = AddToCard::where('user_id', Auth::user()->id)->get();
        foreach ($AddToCards as $card) {
            OrderProduct::create([
                'order_id' => $orders->id,
                'pro_id' => $card->products->id,
                'qty' => $card->qty,
            ]);
        }
        $AddToCards = AddToCard::where('user_id', Auth::user()->id)->delete();

        return redirect(route('thankyou'));
    }
}
