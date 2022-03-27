<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use App\Models\Setting;
use Livewire\Component;

class Contact extends Component
{
    public $setting;

    public $fname;
    public $lname;
    public $email;
    public $subject;
    public $message;

    public function render()
    {
        $this->setting = Setting::findOrFail(1);

        return view('livewire.contact')->layout('layout.app');
    }

    public function contact()
    {
        $validate = $this->validate([
            'fname' => ['required', 'string', 'max:15'],
            'lname' => ['required', 'string', 'max:15'],
            'email' => ['required', 'email', 'max:30'],
            'subject' => ['required', 'string', 'max:100'],
            'message' => ['required'],
        ]);

        $result = ModelsContact::create($validate);
        if ($result) {
            session()->flash('success', 'Admin will response you in Email');
            $this->fname = "";
            $this->lname = "";
            $this->email = "";
            $this->subject = "";
            $this->message = "";
        }
    }
}
