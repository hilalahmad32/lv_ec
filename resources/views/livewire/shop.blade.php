<div>
    <x-slot:title>
        Shop
        </x-slot>
        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-9 order-1">

                        <div class="row align">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left">
                                    <h2 class="text-black h5">Shop All</h2>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4"
                                            id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Latest
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Men</a>
                                            <a class="dropdown-item" href="#">Women</a>
                                            <a class="dropdown-item" href="#">Children</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4"
                                            id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" wire:click.prevent="getProuductByPrice(10,200)" href="#">price $10 to $200</a>
                        <a class="dropdown-item" wire:click.prevent="getProuductByPrice(200,700)"  href="#">price $200 to $700</a>
                      </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            @foreach ($products as $product)
                                <div class="col-lg-6 col-md-6 item-entry mb-4">
                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="{{ $product->image }}" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">{{ $product->title }}</a></h2>
                                    <strong class="item-price">${{ $product->price }}</strong>

                                    <div class="star-rating">
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                        <span class="icon-star2 text-warning"></span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">

                                {{ $products->links() }}
                                <div class="site-block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 order-2 mb-5 mb-md-0">
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
                                            class="d-flex"><span>{{ $brand->brand_name }}</span> <span
                                                class="text-black ml-auto">(2,220)</span></a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                                <div id="slider-range" class="border-primary"></div>
                                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white"
                                    disabled="" />
                            </div>

                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                                <label for="s_sm" class="d-flex">
                                    <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span
                                        class="text-black">Small (2,319)</span>
                                </label>
                                <label for="s_md" class="d-flex">
                                    <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span
                                        class="text-black">Medium (1,282)</span>
                                </label>
                                <label for="s_lg" class="d-flex">
                                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span
                                        class="text-black">Large (1,392)</span>
                                </label>
                            </div>

                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Red (2,429)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Green (2,298)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Blue (1,075)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Purple (1,075)</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

</div>
