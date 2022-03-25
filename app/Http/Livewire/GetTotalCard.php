<?php

namespace App\Http\Livewire;

use App\Models\AddToCard;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GetTotalCard extends Component
{
    public $total = 0;

    protected $listeners = ['updateCart' => 'updateCard'];

    public function mount()
    {
        $cards = AddToCard::where('user_id', Auth::user()->id)->sum('qty');
        $this->total = $cards;
    }
    public function render()
    {
        return view('livewire.get-total-card');
    }

    public function updateCard()
    {
        $this->mount();
    }
}
