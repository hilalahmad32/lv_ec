<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $contacts;
    public function render()
    {
        $this->contacts = ModelsContact::get();
        return view('livewire.admin.contact')->layout('layout.admin-app');
    }
    public function delete($id)
    {
        ModelsContact::findOrFail($id)->delete();
    }
}
