@extends('layouts.front.master')

@section('content')
    <div class="page-header page-header-bg" style="background-image: url({{ asset('assets/frontend/images/banners/btn.jpg') }});">
        <div class="container">
            <h1>Special Offer</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Special Offer</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="about-section">
        <div class="container">
            @foreach($offers as $offer)
            <div class="row align-items-lg-center border mb-5">
                        <div class="col-lg-6">
                            <img class="image" style="width: auto; max-height: 300px; min-height: 300px;" src="{{ asset($offer->file_path) }}" alt="offer_image">
                        </div>
                        <div class="col-lg-6 padding-left-lg">
                            <h3 class="subtitle">{{ $offer->name }}</h3>
                            <h5>Offer Validity:  {{ $offer->date }}</h5>
                            <p class="overflow-hidden">{{ $offer->details }}</p>

                        </div>
            </div><!-- End .row -->
            @endforeach
        </div><!-- End .container -->
    </div><!-- End .about-section -->



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
    <style>
        .row:hover .image {
            opacity: 0.3;
        }
    </style>
@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
