<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThankYou extends Component
{
    public function render()
    {
        header("refresh:3;url=shop");
        return view('livewire.thank-you')->layout('layout.app');
    }
}
