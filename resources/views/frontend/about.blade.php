@extends('layouts.front.master')

@section('content')
        <div class="page-header page-header-bg" style="background-image: url({{ asset('assets/frontend/images/banners/btn.jpg') }});">
            <div class="container">
                <h1>About Us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="subtitle">OUR HISTORY</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus a eros in venenatis. Cras mauris arcu, suscipit id lacinia sed, pulvinar in urna. Donec urna nisi, efficitur fermentum ullamcorper non, mattis et est. Nullam malesuada leo leo, non tempus turpis accumsan a. Sed tincidunt feugiat purus, sed lobortis justo consequat in. Phasellus lectus magna, accumsan eget felis in, hendrerit malesuada lectus. Duis orci nunc, vulputate vel sapien nec, sodales sollicitudin ligula.</p>
                    </div><!-- End .col-lg-7 -->

                    <div class="col-lg-5">
                        <h2 class="subtitle">FOUNDER AND CEO</h2>

                        <div class="testimonials-slider owl-carousel owl-theme">
                            <div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{ asset('assets/frontend/images/clients/client1.png') }}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">john Smith</h4>
                                        <span>Pzx Ceo</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
                                </blockquote>
                            </div><!-- End .testimonial -->

                            {{--<div class="testimonial">
                                <div class="testimonial-owner">
                                    <figure>
                                        <img src="{{ asset('assets/frontend/images/clients/client2.png') }}" alt="client">
                                    </figure>

                                    <div>
                                        <h4 class="testimonial-title">Bob Smith</h4>
                                        <span>Proto Co Ceo</span>
                                    </div>
                                </div><!-- End .testimonial-owner -->

                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mipsum dolor sit amet, consectetur elitad adipiscing.</p>
                                </blockquote>
                            </div>--}}
                        </div><!-- End .testimonials-slider -->
                    </div><!-- End .col-lg-5 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .about-section -->


        <div class="company-section">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/frontend/images/about/img-2.jpg') }}" alt="image">
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6 padding-left-lg">
                        <h3 class="subtitle">OUR MISSION</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>

                        <h3 class="subtitle">OUR VISION</h3>
                        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only look now.</p>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .company-section -->

        <div class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-shipped"></i>

                            <div class="feature-box-content">
                                <h3>FAST SHIPPING</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-us-dollar"></i>

                            <div class="feature-box-content">
                                <h3>100% GENUINE PRODUCT GUARANTEE</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="icon-online-support"></i>

                            <div class="feature-box-content">
                                <h3>ONLINE SUPPORT 24/7</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div><!-- End .feature-box-content -->
                        </div><!-- End .feature-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .features-section -->
@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
