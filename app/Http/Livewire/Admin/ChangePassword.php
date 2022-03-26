<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $old_password;
    public $new_password;
    public function render()
    {
        return view('livewire.admin.change-password')->layout('layout.admin-app');
    }

    public function changePassword()
    {
        $admin = Admin::findOrFail(Auth::user()->id);
        $this->validate([
            'old_password' => ['required'],
            'new_password' => ['required']
        ]);
        if (password_verify($this->old_password, $admin->password)) {
            $admin->password = Hash::make($this->new_password);
            $admin->save();
            session()->flash('success', 'Login Successfully');
        } else {
            session()->flash('error', 'Invalid old Password');
        }
    }
}
