<div>
    <x-slot:title>
        Shop
        </x-slot>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-3 order-2 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Search</h3>
                            <ul class="list-unstyled mb-0">
                                <input type="text" wire:model="search" class="form-control">
                            </ul>
                        </div>
                        <div class="border p-4 rounded mb-4">

                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                @foreach ($categorys as $category)
                                    <li class="mb-1"><a href="#"
                                            wire:click.prevent='getProuductByCat({{ $category->id }})'
                                            class="d-flex"><span>{{ $category->category_name }}</span> <span
                                                class="text-black ml-auto">(2,220)</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Brands</h3>
                            <ul class="list-unstyled mb-0">
                                @foreach ($brands as $brand)
                                    <li class="mb-1"><a href="#"
                                            wire:click.prevent='getProuductByCat({{ $brand->id }})'
                                            class="d-flex"><span>{{ $brand->brand_name }}</span> <span
                                                class="text-black ml-auto">(2,220)</span></a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                    <div class="col-md-9 order-1">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left">
                                    <h2 class="text-black h5">Shop All</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            @foreach ($products as $product)
                                <div class="col-lg-6 col-md-6 item-entry mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <a href="{{ route('product_detail', ['slug' => $product->slug]) }}">
                                                <img src="{{ asset('storage') }}/{{ $product->image }}"
                                                    alt="{{ $product->title }}" style="width:100%;">
                                            </a>
                                            <h2 class="item-title" style="margin: 10px 0px"><a
                                                    href="{{ route('product_detail', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                            </h2>
                                            <strong class="item-price">$ {{ $product->price }}</strong>

                                            {{-- <div class="star-rating">
                                                <span class="icon-star2 text-warning"></span>
                                                <span class="icon-star2 text-warning"></span>
                                                <span class="icon-star2 text-warning"></span>
                                                <span class="icon-star2 text-warning"></span>
                                                <span class="icon-star2 text-warning"></span>
                                            </div> --}}
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="">
                                    @if ($page_number > 10)
                                        <a href="#" wire:click.prevent='loadMore'>Load More</a></li>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

</div>
