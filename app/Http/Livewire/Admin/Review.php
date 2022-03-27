<?php

namespace App\Http\Livewire\Admin;

use App\Models\Review as ModelsReview;
use Livewire\Component;

class Review extends Component
{
    public $search;
    public function render()
    {
        if ($this->search != "") {
            $reviews = ModelsReview::where('brand_name', 'LIKE', '%' . $this->search . '%')->orderBy('id', 'desc')->get();
            return view('livewire.admin.review', compact('reviews'))->layout('layout.admin-app');
        }
        $reviews = ModelsReview::orderBy('id', 'desc')->get();
        return view('livewire.admin.review', compact('reviews'))->layout('layout.admin-app');
    }

    public function delete($id)
    {
        ModelsReview::findOrFail($id)->delete();
    }
}
