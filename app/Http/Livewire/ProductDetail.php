<?php

namespace App\Http\Livewire;

use App\Models\AddToCard;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{

    public $slug;
    public $single_product;
    public $rating;
    public $reviews;

    public $size;
    public $color;

    public $getReviews;

    public $qty = 1;
    public function mount($slug)
    {
        $this->slug = $slug;
        Product::whereSlug($slug)->increment('views', 1);
    }
    public function render()
    {
        $this->single_product = Product::where('slug', $this->slug)->first();
        $this->getReviews = Review::where('pro_id', $this->single_product->id)->orderBy('id', 'DESC')->get();
        return view('livewire.product-detail')->layout('layout.app');
    }

    public function review($id)
    {
        $reviews = new Review();
        $this->validate([
            'rating' => ['required'],
            'reviews' => ['required'],
        ]);

        $reviews->user_id = Auth::user()->id;
        $reviews->pro_id = $id;
        $reviews->rating = $this->rating;
        $reviews->reviews = $this->reviews;
        $reviews->save();

        $this->rating = "";
        $this->reviews = "";
    }

    public function increment()
    {
        $this->qty++;
    }
    public function decrement()
    {
        if ($this->qty != 1) {
            $this->qty--;
        }
    }

    public function addToCard($id)
    {

        $products = Product::findOrFail($id);
        $price = $products->price;
        $is_product = AddToCard::where('pro_id', $id)->first();
        if ($is_product) {
            session()->flash('exist', 'Product already in card,Chose another one or update the card <a href="/card">Card</a> ');
        } else {
            $this->validate([
                'size' => ['required'],
            ]);
            $cards = new AddToCard();
            $totalPrice = $this->qty * $price;
            $cards->pro_id = $id;
            $cards->user_id = Auth::user()->id;
            $cards->size = $this->size;
            $cards->qty = $this->qty;
            $cards->total_price = $totalPrice;
            $result = $cards->save();
            return redirect(route('card'));
        }
    }
}
