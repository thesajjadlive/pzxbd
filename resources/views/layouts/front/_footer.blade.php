<div class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="widget">
                    <h4 class="widget-title">My Account</h4>

                    <ul class="links">
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('user.view') }}">My Account</a></li>
                        <li><a href="#">Orders History</a></li>
                        <li><a href="#">Advanced Search</a></li>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-lg-2 -->

            <div class="col-lg-3 col-md-6">
                <div class="widget">
                    <h4 class="widget-title">Main Features</h4>

                    <ul class="links">
                        <li><a href="#">Quick Response</a></li>
                        <li><a href="#">Co-Operative Staff</a></li>
                        <li><a href="#">Super Fast Shipping</a></li>
                        <li><a href="#">100% Genuine Product</a></li>
                        <li><a href="#">Awesome After Sell Service</a></li>
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-lg-3 -->

            <div class="col-lg-5 col-md-6">
                <div class="widget widget-newsletter">
                    <h4 class="widget-title">Subscribe newsletter</h4>
                    <p>Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
                    <form action="{{ route('subscribe') }}" method="post">
                        @csrf
                        <input name="email" type="email" class="form-control" placeholder="Email address" required>

                        <button type="submit" class="btn">Subscribe<i class="icon-angle-right"></i></button>
                    </form>
                </div><!-- End .widget -->
            </div><!-- End .col-lg-5 -->

            <div class="col-lg-4 col-md-6">
                <div class="widget">
                    <ul class="contact-info">
                        @foreach($settings as $setting)
                        <li>
                            <span class="contact-info-label">Address:</span>{{ $setting->address }}
                        </li>
                        <li>
                            <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a>
                        </li>
                        <li>
                            <span class="contact-info-label">Email:</span> <a href="mailto:{{ $setting->email_1 }}">{{ $setting->email_1 }}</a>
                        </li>
                        <li>
                            <span class="contact-info-label">Working Days/Hours:</span>
                            Sat - Thu / 10:00AM - 8:00PM
                        </li>
                        @endforeach
                    </ul>
                </div><!-- End .widget -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div><!-- End .footer-middle -->

<div class="container">
    <div class="footer-bottom">
        <p class="footer-copyright">Pzxbd.com &copy;  2019.  All Rights Reserved</p>
        <img src="{{ asset('assets/frontend/images/payment.png') }}" alt="payment methods" class="footer-payments">

        <div class="social-icons">
            @foreach($settings as $setting)
            <a href="https://{{ $setting->facebook }}" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="https://{{ $setting->twitter }}" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="https://{{$setting->linkedin}}" class="social-icon" target="_blank"><i class="icon-linkedin"></i></a>
            @endforeach
        </div><!-- End .social-icons -->
    </div><!-- End .footer-bottom -->
</div><!-- End .containr -->
