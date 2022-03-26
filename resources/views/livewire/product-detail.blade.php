<div>
    <x-slot:title>
        Product Detail / {{ $single_product->id }}
        </x-slot>
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                            href="shop.html">Shop</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">{{ $single_product->title }}</strong></div>
                </div>
            </div>
        </div>
        @if (session()->has('exist'))
            <div class="alert alert-danger custom-success">
                <strong>{!! session('exist') !!}</strong>
            </div>
        @endif


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="{{ asset('storage') }}/{{ $single_product->image }}"
                                    alt="{{ $single_product->title }}" class="img-fluid">
                            </a>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h2 class="text-black">{{ $single_product->title }}</h2>
                        <p>{{ $single_product->short_desc }}</p>
                        <p><strong class="text-primary h4">${{ $single_product->price }}</strong></p>
                        <div class="mb-1 d-flex">
                            <label for="option-sm" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                                    <input type="radio" id="option-sm" value="1" wire:model="size"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                            </label>
                            <label for="option-md" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-md" value="2" wire:model="size"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                            </label>
                            <label for="option-lg" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-lg" value="3" wire:model="size"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                            </label>
                            <label for="option-xl" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-xl" value="4" wire:model="size"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra
                                    Large</span>
                            </label>
                            @error('size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button {{ $qty == 1 ? 'disabled' : '' }}
                                        class="btn btn-outline-primary js-btn-minus" type="button"
                                        wire:click="decrement">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center" value="1" placeholder=""
                                    aria-label="Example text with button addon" aria-describedby="button-addon1"
                                    wire:model="qty">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button"
                                        wire:click="increment">&plus;</button>
                                </div>
                            </div>

                        </div>
                        <p>
                            @auth
                                <a href="#" wire:click.prevent="addToCard({{ $single_product->id }})"
                                    class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To
                                    Cart</a>
                            @endauth

                            @guest
                                <a href="{{ route('login') }}"
                                    class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To
                                    Cart</a>
                            @endguest
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="tab-pane fade show active">
                    <h4 class="mb-3">Product Description</h4>
                    <p>{{ $single_product->long_desc }}</p>
                </div>
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">{{ count($getReviews) }} review for
                                "{{ $single_product->title }}"</h4>
                            <div class="media mb-4">
                                <div class="media-body">
                                    @foreach ($getReviews as $getReview)
                                        <h6>{{ $getReview->users->username }}<small> -
                                                <i>{{ $getReview->created_at->format('d/m/Y') }}
                                                </i></small>
                                        </h6>
                                        <div class="text-primary mb-2">
                                            @if ($getReview->rating == 1)
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @endif

                                            @if ($getReview->rating == 2)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @endif

                                            @if ($getReview->rating == 3)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @endif

                                            @if ($getReview->rating == 4)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @endif

                                            @if ($getReview->rating == 5)
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            @endif

                                            @if ($getReview->rating == 1)
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            @endif


                                        </div>
                                        <p>{{ $getReview->reviews }}</p>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Leave a review</h4>
                            <small>Your email address will not be published. Required fields are marked *</small>
                            <form wire:submit.prevent="review({{ $single_product->id }})" wire:ignore>
                                <div class="form-group">
                                    <p class="mb-0 mr-2">Your Rating * :</p>

                                    <select class="form-control" wire:model.lazy="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @error('rating')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">Your Review *</label>
                                    <textarea wire:model.lazy="reviews" cols="30" rows="5" class="form-control"></textarea>
                                    @error('reviews')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @auth
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                @endauth
                                @guest
                                    <div class="form-group mb-0">
                                        <a href="{{ route('login') }}" class="btn btn-primary px-3">Leave Your Review</a>
                                    </div>
                                @endguest
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
