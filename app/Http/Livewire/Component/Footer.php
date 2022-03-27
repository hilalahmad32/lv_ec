<?php

namespace App\Http\Livewire\Component;

use App\Models\Setting;
use Livewire\Component;

class Footer extends Component
{
    public $setting;
    public function render()
    {
        $this->setting = Setting::findOrFail(1);

        return view('livewire.component.footer');
    }
}
