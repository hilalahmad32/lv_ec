<?php

namespace App\Http\Livewire;

use App\Models\Subscribe as ModelsSubscribe;
use Livewire\Component;

class Subscribe extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.subscribe');
    }

    public function store()
    {
        $validate = $this->validate([
            'email' => ['required', 'email', 'max:30', 'min:10']
        ]);

        ModelsSubscribe::create($validate);
        $this->email = "";
        session()->flash('success', 'Subscibe Successfully');
    }
}
