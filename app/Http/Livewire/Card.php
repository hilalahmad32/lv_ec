<?php

namespace App\Http\Livewire;

use App\Models\AddToCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Card extends Component
{
    public $totalCards;

    public $total;
    public $totalPrice;

    protected $listeners = ['updateCart' => 'priceUpdated'];

    public function mount()
    {
        $this->totalPrice = AddToCard::where(['user_id' => Auth::user()->id])->sum('total_price');
    }

    public function render()
    {
        $this->totalCards = AddToCard::where('user_id', Auth::user()->id)->get();
        return view('livewire.card')->layout('layout.app');
    }

    public function removeCard($id)
    {
        $result = AddToCard::findOrFail($id)->delete();
        $this->emit("updateCart");
    }

    public function priceUpdated()
    {
        $this->totalPrice = AddToCard::where(['user_id' => Auth::user()->id])->sum('total_price');
    }


    public function increment($id)
    {
        $card = AddToCard::findOrFail($id);
        $price = $card->products->price;
        $totalCard = $card->qty  + 1;
        $card->qty = $totalCard;
        $card->total_price = $price *  $totalCard;
        $card->save();
        $this->emit("updateCart");
    }

    public function decrement($id)
    {
        $card = AddToCard::findOrFail($id);
        $price = $card->products->price;
        $totalCard = 0;
        if ($card->qty != 0) {
            $totalCard = $card->qty  - 1;
        }
        $card->qty = $totalCard == 0 ? 0 : $totalCard;
        $card->total_price = $price *  $totalCard;
        $card->save();
        $this->emit("updateCart");
    }
}
