<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $search;
    public function render()
    {
        if ($this->search != "") {
            $users = ModelsUser::where('username', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
            return view('livewire.admin.review', compact('users'))->layout('layout.admin-app');
        }
        $users = ModelsUser::orderBy('id', 'desc')->get();
        return view('livewire.admin.user', compact('users'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        ModelsUser::findOrFail($id)->delete();
    }
}
