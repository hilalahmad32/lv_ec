<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $showTable = true;
    public $createForm = false;
    public $updateForm = false;

    public $search;
    public $category_id;
    public $category_name;
    public $edit_category_name;
    public $totalCategory;
    public function render()
    {
        $this->totalCategory = ModelsCategory::count();
        if ($this->search != "") {
            $categories = ModelsCategory::where('category_name', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
            return view('livewire.admin.category', compact('categories'))->layout('layout.admin-app');
        }
        $categories = ModelsCategory::orderBy('id', 'desc')->get();
        return view('livewire.admin.category', compact('categories'))->layout('layout.admin-app');
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
        $this->category_name = "";
        $this->category_id = "";
        $this->edit_category_name = "";
    }

    public function store()
    {
        $validate = $this->validate([
            'category_name' => ['required', 'string', 'max:35', 'min:3', 'unique:categories'],
        ]);
        $result = ModelsCategory::create($validate);
        if ($result) {
            session()->flash('success', 'Category Add Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }

    public function edit($id)
    {
        $this->showTable = false;
        $this->updateForm = true;
        $categories = ModelsCategory::findOrFail($id);
        $this->category_id = $categories->id;
        $this->edit_category_name = $categories->category_name;
    }

    public function update($id)
    {
        $categories = ModelsCategory::findOrFail($id);
        $this->validate([
            'edit_category_name' => ['required', 'string', 'max:35', 'min:3'],
        ]);
        $categories->category_name = $this->edit_category_name;
        $result = $categories->save();
        if ($result) {
            session()->flash('success', 'Category Update Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }
    public function delete($id)
    {
        $result = ModelsCategory::findOrFail($id)->delete();
        if ($result) {
            session()->flash('success', 'Category Delete Successfully');
            $this->goBack();
            $this->resetField();
        } else {
            session()->flash('error', 'Server Problems');
        }
    }
}
