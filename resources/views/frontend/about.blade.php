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
                    <div class="col-lg-12">
                        <h2 class="subtitle">OUR HISTORY</h2>
                        @foreach($settings as $setting)
                        <p class="text-justify">{{ $setting->history }}</p>
                        @endforeach
                    </div><!-- End .col-lg-7 -->

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
                        @foreach($settings as $setting)
                            <p class="text-justify">{{ $setting->mission }}</p>
                        @endforeach
                        <h3 class="subtitle">OUR VISION</h3>
                        @foreach($settings as $setting)
                            <p class="text-justify">{{ $setting->vision }}</p>
                        @endforeach
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
