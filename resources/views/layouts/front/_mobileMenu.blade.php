<div class="mobile-menu-wrapper">
    <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
    <nav class="mobile-nav">
        <ul class="mobile-menu">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="{{ route('front.product.index') }}">Categories</a>
                <ul>
                    @foreach($categories as $id=>$category)
                        <li><a href="{{ route('front.product.index', $id) }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('front.product.index') }}">Brands</a>
                <ul>
                    @foreach($brands as $id=>$brand)
                        <li><a href="{{ route('front.product.brand', $id) }}">{{ $brand }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#">Shopping<span class="tip tip-hot">Cart!</span></a>
                <ul>
                    <li><a href="{{ route('cart') }}">View Cart</a></li>
                    <li><a href="{{route('checkout')}}">Checkout</a></li>

                </ul>
            </li>
            <li>
                <a href="{{ url('about') }}">About Us</a>
            </li>
            <li>
                <a href="{{ url('contact') }}">Contact</a>
            </li>
            <li class="float-right buy-effect"><a href="{{ route('offer') }}"><span>Special Offer <span class="tip tip-hot">Hot!</span></span></a></li>
        </ul>
    </nav><!-- End .mobile-nav -->

    <div class="social-icons">
            <a href="https://{{ $setting->facebook }}" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="https://{{ $setting->twitter }}" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="https://{{$setting->linkedin}}" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
    </div><!-- End .social-icons -->
</div><!-- End .mobile-menu-wrapper -->