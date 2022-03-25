<div>
    <x-slot:title>
        Product Detail / {{ $single_product->id }}
        </x-slot>
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                            href="shop.html">Shop</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">Gray Shoe</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-entry">
                            <a href="#" class="product-item md-height bg-gray d-block">
                                <img src="{{ $single_product->image }}" alt="Image" class="img-fluid">
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
                        </div>
                        {{-- <div class="mb-1 d-flex">
                            <label for="option-sm" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" value="1" wire:model="color" id="black" name="shop-color"></span>
                                <span class="d-inline-block text-black">Black</span>
                            </label>
                            <label for="option-md" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-md" value="2" wire:model="color"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black">Red</span>
                            </label>
                            <label for="option-lg" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input value="3"
                                        wire:model="color" type="radio" id="option-lg" name="shop-sizes"></span> <span
                                    class="d-inline-block text-black">green</span>
                            </label>
                            <label for="option-xl" class="d-flex mr-3 mb-3">
                                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input
                                        type="radio" id="option-xl" value="4" wire:model="color"
                                        name="shop-sizes"></span> <span class="d-inline-block text-black">Blue</span>
                            </label>
                        </div> --}}
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
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews
                        ({{ count($getReviews) }})</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>{{ $single_product->long_desc }}</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
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
                                <div class="d-flex my-3">

                                    {{-- <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div> --}}
                                </div>
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
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message" wire:model.lazy="reviews" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section block-3 site-blocks-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3">
                        <div class="nonloop-block-3 owl-carousel">
                            <div class="item">
                                <div class="item-entry">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="images/model_1.png" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                                    <strong class="item-price"><del>$46.00</del> $28.00</strong>
                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-entry">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="images/prod_3.png" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                                    <strong class="item-price"><del>$46.00</del> $28.00</strong>

                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-entry">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="images/model_5.png" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                                    <strong class="item-price"><del>$46.00</del> $28.00</strong>

                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="item-entry">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="images/prod_1.png" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                                    <strong class="item-price"><del>$46.00</del> $28.00</strong>
                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-entry">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="images/model_7.png" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                                    <strong class="item-price">$58.00</strong>
                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
