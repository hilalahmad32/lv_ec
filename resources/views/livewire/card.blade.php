<div>
    <x-slot:title>
        Card
        </x-slot>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Size</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($totalCards as $card)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <img src="{{ $card->products->image }}" alt="Image"
                                                    class="img-fluid">
                                            </td>
                                            <td class="product-name">
                                                <h2 class="h5 text-black">{{ $card->products->title }}</h2>
                                            </td>
                                            <td>{{ $card->size }}</td>
                                            <td>${{ $card->products->price }}</td>
                                            <td>
                                                <form">
                                                    <div class="input-group mb-3" style="max-width: 120px;">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-outline-primary js-btn-minus"
                                                                type="button"
                                                                wire:click.prevent='decrement({{ $card->id }})'>&minus;</button>
                                                        </div>
                                                        <input type="text" class="form-control text-center"
                                                            placeholder="" aria-label="Example text with button addon"
                                                            aria-describedby="button-addon1"
                                                            value='{{ $card->qty }}'>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-primary js-btn-plus"
                                                                type="button"
                                                                wire:click.prevent='increment({{ $card->id }})'>&plus;</button>
                                                        </div>
                                                    </div>
                    </form>

                    </td>
                    <td>${{ $card->total_price }}</td>
                    <td><a href="#" wire:click.prevent='removeCard({{ $card->id }})'
                            class="btn btn-primary height-auto btn-sm">X</a></td>
                    </tr>
                    @endforeach



                    </tbody>
                    </table>
                </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <a href="{{ route('shop') }}">
                                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>

                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">Coupon</label>
                            <p>Enter your coupon code if you have one.</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">$230.00</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">${{ $totalPrice }}</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-lg btn-block"
                                        onclick="window.location='checkout.html'">Proceed To Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
