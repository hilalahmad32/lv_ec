<div>
    <x-slot:title>
        Order
        </x-slot>
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                            href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">Checkout</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Billing Details</h2>
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group">
                                <label for="c_country" class="text-black">Email <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" wire:model.lazy='email' id="email"
                                    name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name" class="text-black">Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='name' id="name"
                                        name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="text-black">City<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='city' id="city"
                                        name="city">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="address" class="text-black">Address</label>
                                    <input type="text" class="form-control" wire:model.lazy='address' id="address"
                                        name="address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="province" class="text-black">Province <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='privonce' id="province"
                                        name="province">
                                    @error('privonce')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="postal_code" class="text-black">Postal Code <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='postal_code'
                                        id="postal_code" name="postal_code">
                                    @error('postal_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="text-black">Phone<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='phone' id="phone"
                                        name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border">
                                    <table class="table site-block-order-table mb-5">
                                        <thead>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($totalCards as $card)
                                                <tr>
                                                    <td>{{ $card->products->title }} </td>
                                                    <td>{{ $card->qty }}</td>
                                                    <td>{{ $card->total_price }}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td class="text-black font-weight-bold"><strong>Order Total</strong>
                                                </td>
                                                <td class="text-black font-weight-bold"></td>
                                                <td class="text-black font-weight-bold">
                                                    <strong>{{ $totalPrice }}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                href="#collapsebank" role="button" aria-expanded="false"
                                                aria-controls="collapsebank">Cash on Delivery</a></h3>

                                        <div class="collapse" id="collapsebank">
                                            <div class="py-2">
                                                <p class="mb-0">Make your payment directly into our bank
                                                    account. Please use your Order ID as the payment reference. Your
                                                    order won’t be shipped until the funds have cleared in our account.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block"
                                            wire:click.prevent='submitOrder'>Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
</div>
''
