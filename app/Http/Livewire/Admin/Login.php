<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username;
    public $password;
    public function render()
    {
        return view('livewire.admin.login')->layout('layout.admin-login');
    }

    public function login()
    {
        $this->validate([
            'username' => ['required', 'string', 'max:30', 'min:3'],
            'password' => ['required', 'string', 'max:15', 'min:6'],
        ]);

        $admins = Auth::guard('admin')->attempt(['username' => $this->username, 'password' => $this->password]);
        if ($admins) {
            session()->flash('success', 'Login Successfully');
            return redirect(route('dashboard'));
        } else {
            session()->flash('error', 'Invalid email and password');
        }
    }
}
