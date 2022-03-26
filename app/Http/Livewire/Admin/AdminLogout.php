<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogout extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-logout');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin-login'));
    }
}
