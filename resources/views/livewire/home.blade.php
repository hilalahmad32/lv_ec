<div>
    <x-slot:title>
        Home
        </x-slot>
        <div class="site-blocks-cover" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto order-md-2 align-self-start">
                        <div class="site-block-cover-content">
                            <h2 class="sub-title">#New Summer Collection 2019</h2>
                            <h1>Arrivals Sales</h1>
                            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 align-self-end">
                        <img src="{{ asset('users/images/model_3.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section mb-5 col-12">
                        <h2 class="text-uppercase">Popular Products</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($popularProducts as $popular)
                        <div class="col-lg-4 col-md-6 item-entry mb-4">
                            <a href="{{ route('product_detail', ['id' => $popular->id]) }}"
                                class="product-item md-height bg-gray d-block">
                                <img src="{{ $popular->image }}" alt="Image" class="img-fluid">
                            </a>
                            <h2 class="item-title"><a href="#">{{ $popular->title }}</a></h2>
                            <strong class="item-price">$ {{ $popular->price }}</strong>

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
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center mb-5 col-12">
                        <h2 class="text-uppercase">Most Rated</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3">
                        <div class="nonloop-block-3 owl-carousel">
                            @foreach ($popularProducts as $popular)
                                <div class="item">

                                    <a href="#" class="product-item md-height bg-gray d-block">
                                        <img src="{{ $popular->image }}" alt="Image" class="img-fluid">
                                    </a>
                                    <h2 class="item-title"><a href="#">{{ $popular->title }}</a></h2>
                                    <strong class="item-price">$ {{ $popular->price }}</strong>

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
                    </div>
                </div>
            </div>
        </div>


        <div class="site-blocks-cover inner-page py-5" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto order-md-2 align-self-start">
                        <div class="site-block-cover-content">
                            <h2 class="sub-title">#New Summer Collection 2019</h2>
                            <h1>New Shoes</h1>
                            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 align-self-end">
                        <img src="images/model_6.png" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
</div>
