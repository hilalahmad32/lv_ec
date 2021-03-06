<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login')->layout('layout.app');
    }

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email', 'max:30', 'min:10'],
            'password' => ['required', 'string', 'max:15', 'min:6'],
        ]);

        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);
        if ($user) {
            session()->flash('success', 'Login Successfully');
            return redirect(route('home'));
        } else {
            session()->flash('error', 'Invalid email and password');
        }
    }
}
