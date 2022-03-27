<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order as ModelsOrder;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $orders = ModelsOrder::orderBy('id', 'desc')->get();

        return view('livewire.admin.order', compact('orders'))->layout('layout.admin-app');
    }

    public function complete($id)
    {
        $orders = ModelsOrder::findOrFail($id);
        $orders->complete = 1;
        $orders->save();
        $order_products = OrderProduct::where('order_id', $id)->first();
        $order_products->complete = 1;
        $order_products->save();
    }
    public function delete($id)
    {
        ModelsOrder::findOrFail($id)->delete();
    }
}
