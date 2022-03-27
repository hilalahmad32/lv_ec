<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
    <h3 class="footer-heading mb-4">{{ $setting->footer_logo }}</h3>
    <a href="#" class="block-6">
        <img src="{{ asset('users/images/about_1.jpg') }}" alt="Image placeholder" class="img-fluid rounded mb-4">
        {{-- <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3> --}}
        <p>{{ $setting->footer_desc }}</p>
    </a>
</div>
<div class="col-lg-5 ml-auto mb-5 mb-lg-0">
    <div class="row">
        <div class="col-md-12">
            <h3 class="footer-heading mb-4">Quick Links</h3>
        </div>
        <div class="col-md-6 col-lg-4">
            <ul class="list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
    <div class="block-5 mb-5">
        <h3 class="footer-heading mb-4">Contact Info</h3>
        <ul class="list-unstyled">
            <li class="address">{{ $setting->address }}</li>
            <li class="phone"><a href="tel://{{ $setting->phone }}">{{ $setting->phone }}</a></li>
            <li class="email">{{ $setting->email }}</li>
        </ul>
    </div>
    <div class="block-7">
        <form action="#" method="post">
            <label for="email_subscribe" class="footer-heading">Subscribe</label>
            @livewire('subscribe')
        </form>
    </div>
</div>
