<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('users/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('users/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('users/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('users/css/style.css') }}">

    @livewireStyles
</head>
<style>
    .custom-success {
        position: fixed;
        top: 3%;
        right: 2%;
        /* width: 5%; */
        z-index: 9999;
    }

</style>

<body>

    {{-- <div class="alert alert-success custom-success">
        <strong></strong>
    </div> --}}

    <div class="site-wrap">
        <div class="site-navbar bg-white py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="index.html" class="js-logo-clone">ShopMax</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="has-children active">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="contact.html">Contact</a></li>

                                @auth
                                    <li><a href="contact.html">Account</a></li>

                                @endauth

                                @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('signup') }}">Signup</a></li>
                                @endguest

                            </ul>
                        </nav>
                    </div>
                    <div class="icons d-flex">
                        @auth
                            @livewire('logout')
                        @endauth
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span
                                class="icon-search"></span></a>

                        <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                        @auth
                            @livewire('get-total-card')
                        @endauth
                        @guest
                            <a href="{{ route('card') }}" class="icons-btn d-inline-block bag">
                                <span class="icon-shopping-bag"></span>
                                <span class="number">0</span>
                            </a>
                        @endguest
                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                                class="icon-menu"></span></a>
                    </div>
                </div>
            </div>

            {{ $slot }}


            <footer class="site-footer custom-border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <h3 class="footer-heading mb-4">About Us</h3>
                            <a href="#" class="block-6">
                                <img src="{{ asset('users/images/about_1.jpg') }}" alt="Image placeholder"
                                    class="img-fluid rounded mb-4">
                                <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
                                <p>Promo from July 15 &mdash; 25, 2019</p>
                            </a>
                        </div>
                        <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="footer-heading mb-4">Quick Links</h3>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Sell online</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Shopping cart</a></li>
                                        <li><a href="#">Store builder</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="block-5 mb-5">
                                <h3 class="footer-heading mb-4">Contact Info</h3>
                                <ul class="list-unstyled">
                                    <li class="address">Dargi Malakand , GT Road Mardan</li>
                                    <li class="phone"><a href="tel://+923423601581">+923423601581</a></li>
                                    <li class="email">programmerhero6@gmail.com</li>
                                </ul>
                            </div>

                            <div class="block-7">
                                <form action="#" method="post">
                                    <label for="email_subscribe" class="footer-heading">Subscribe</label>
                                    @livewire('subscribe')
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank" class="text-primary">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>

        @livewireScripts
        <script src="{{ asset('users/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('users/js/popper.min.js') }}"></script>
        <script src="{{ asset('users/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('users/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('users/js/aos.js') }}"></script>

        <script src="users/js/main.js"></script>
</body>

</html>
