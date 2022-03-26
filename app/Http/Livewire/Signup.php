<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Signup extends Component
{

    public $fname;
    public $lname;
    public $email;
    public $username;
    public $password;
    public function render()
    {
        return view('livewire.sign-up')->layout('layout.app');
    }


    public function create()
    {
        $users = new User();
        $this->validate([
            'fname' => ['required', 'string', 'max:10', 'min:3'],
            'lname' => ['required', 'string', 'max:10', 'min:3'],
            'username' => ['required', 'string', 'max:15', 'min:3',],
            'email' => ['required', 'email', 'max:30', 'min:10', 'unique:users'],
            'password' => ['required', 'string', 'max:15', 'min:6'],
        ]);


        $users->fname = $this->fname;
        $users->lname = $this->lname;
        $users->email = $this->email;
        $users->username = $this->username;
        $users->password = Hash::make($this->password);
        $result = $users->save();
        if ($result) {
            session()->flash('success', 'Signup Successfully Now you cand login ');
            $this->fname = "";
            $this->lname = "";
            $this->email = "";
            $this->username = "";
            $this->password = "";
            return redirect(route('login'));
        }
    }
}
