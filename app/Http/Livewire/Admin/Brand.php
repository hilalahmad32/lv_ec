<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand as ModelsBrand;
use Livewire\Component;

class Brand extends Component
{
    public $showTable = true;
    public $createForm = false;
    public $updateForm = false;

    public $search;
    public $brand_id;
    public $brand_name;
    public $edit_brand_name;
    public $totalBrand;
    public function render()
    {
        $this->totalBrand = ModelsBrand::count();
        if ($this->search != "") {
            $brands = ModelsBrand::where('brand_name', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
            return view('livewire.admin.brand', compact('brands'))->layout('layout.admin-app');
        }
        $brands = ModelsBrand::orderBy('id', 'desc')->get();
        return view('livewire.admin.brand', compact('brands'))->layout('layout.admin-app');
    }

    public function showForm()
    {
        $this->showTable = false;
        $this->createForm = true;
    }

    public function goBack()
    {
        $this->showTable = true;
        $this->createForm = false;
        $this->updateForm = false;
    }

    public function resetField()
    {
        $this->brand_name = "";
        $this->brand_id = "";
        $this->edit_brand_name = "";
    }

    public function store()
    {
        $validate = $this->validate([
            'brand_name' => ['required', 'string', 'max:35', 'min:3', 'unique:brands'],
        ]);
        $result = ModelsBrand::create($validate);
        $this->goBack();
        $this->resetField();
    }

    public function edit($id)
    {
        $this->showTable = false;
        $this->updateForm = true;
        $categories = ModelsBrand::findOrFail($id);
        $this->brand_id = $categories->id;
        $this->edit_brand_name = $categories->brand_name;
    }

    public function update($id)
    {
        $categories = ModelsBrand::findOrFail($id);
        $this->validate([
            'edit_brand_name' => ['required', 'string', 'max:35', 'min:3'],
        ]);
        $categories->brand_name = $this->edit_brand_name;
        $categories->save();
        $this->goBack();
    }
    public function delete($id)
    {
        $result = ModelsBrand::findOrFail($id)->delete();
    }
}
