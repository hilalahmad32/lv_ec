<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting as ModelsSetting;
use Livewire\Component;

class Setting extends Component
{

    public $setting_id;
    public $header_logo;
    public $phone;
    public $email;
    public $address;
    public $footer_logo;
    public $footer_desc;
    public function mount()
    {
        $setting = ModelsSetting::findOrFail(1);
        $this->setting_id = $setting->id;
        $this->header_logo = $setting->header_logo;
        $this->phone = $setting->phone;
        $this->email = $setting->email;
        $this->address = $setting->address;
        $this->footer_logo = $setting->footer_logo;
        $this->footer_desc = $setting->footer_desc;
    }
    public function render()
    {
        return view('livewire.admin.setting')->layout('layout.admin-app');
    }

    public function store($id)
    {
        $setting = ModelsSetting::findOrFail($id);
        $setting->header_logo =  $this->header_logo;

        $setting->phone = $this->phone;

        $setting->email = $this->email;

        $setting->address = $this->address;

        $setting->footer_logo = $this->footer_logo;

        $setting->footer_desc = $this->footer_desc;
        $setting->save();
    }
}
