@extends('layouts.front.master')

@section('content')
        <div class="home-top-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="home-slider owl-carousel owl-carousel-lazy">
                            <div class="home-slide">
                                <img class="owl-lazy" src="{{ asset('assets/frontend/images/lazy.png') }}" data-src="{{ asset('assets/frontend/images/slider/slider-4.jpg') }}" alt="slider image">
                                <div class="home-slide-content">
                                    <h1>up to 30% off</h1>
                                    <h3>Top Brands</h3>
                                    <a href="{{ route('front.product.index') }}" class="btn btn-primary">Shop Now</a>
                                </div><!-- End .home-slide-content -->
                            </div><!-- End .home-slide -->

                            <div class="home-slide">
                                <img class="owl-lazy" src="{{ asset('assets/frontend/images/lazy.png') }}" data-src="{{ asset('assets/frontend/images/slider/slider-3.jpg') }}" alt="slider image">
                                <div class="home-slide-content">
                                    <h1>up to 40% off</h1>
                                    <h3>New Accessories</h3>
                                    <a href="{{ route('front.product.index') }}" class="btn btn-secondary">Shop Now</a>
                                </div><!-- End .home-slide-content -->
                            </div><!-- End .home-slide -->
                        </div><!-- End .home-slider -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="banner banner-image" style="margin-bottom: 10px">
                            <a href="{{ route('front.product.index',1) }}">
                                <img src="{{ asset('assets/frontend/images/banners/ban-1.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->

                        <div class="banner banner-image" style="margin-bottom: 10px">
                            <a href="{{ route('front.product.index',1) }}">
                                <img src="{{ asset('assets/frontend/images/banners/ban-2.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->

                        <div class="banner banner-image" style="margin-bottom: 10px">
                            <a href="{{ route('front.product.index',1) }}">
                                <img src="{{ asset('assets/frontend/images/banners/ban-3.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .home-top-container -->

        <div class="info-boxes-container">
            <div class="container">
                <div class="info-box">
                    <i class="icon-shipping"></i>

                    <div class="info-box-content">
                        <h4>FAST SHIPPING</h4>
                        <p>Free shipping on all orders over 1000 Tk.</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-us-dollar"></i>

                    <div class="info-box-content">
                        <h4>PRODUCT GUARANTEE</h4>
                        <p>100% Genuine product guarantee</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->

                <div class="info-box">
                    <i class="icon-support"></i>

                    <div class="info-box-content">
                        <h4>ONLINE SUPPORT 24/7</h4>
                        <p>24 Hours support over phone and online</p>
                    </div><!-- End .info-box-content -->
                </div><!-- End .info-box -->
            </div><!-- End .container -->
        </div><!-- End .info-boxes-container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="home-product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="featured-products-tab" data-toggle="tab" href="#featured-products" role="tab" aria-controls="featured-products" aria-selected="true">Featured Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="latest-products-tab" data-toggle="tab" href="#latest-products" role="tab" aria-controls="latest-products" aria-selected="false">Latest Products</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                                <div class="row row-sm">


                                    @if(isset($featured_product))
                                        @foreach($featured_product as $product)
                                            @include('frontend.product._list')
                                        @endforeach
                                    @endif


                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->
                            <div class="tab-pane fade" id="latest-products" role="tabpanel" aria-labelledby="latest-products-tab">
                                <div class="row row-sm">


                                    @if(isset($latest_product))
                                        @foreach($latest_product as $product)
                                            @include('frontend.product._list')
                                        @endforeach
                                    @endif


                                </div><!-- End .row -->
                            </div><!-- End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .home-product-tabs -->

                    <div class="banners-group">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="banner banner-image">
                                    <a href="{{ route('front.product.index',3) }}">
                                        <img src="{{ asset('assets/frontend/images/banners/ban-4.jpg') }}" alt="banner">
                                    </a>
                                </div><!-- End .banner -->

                                <div class="banner banner-image">
                                    <a href="{{ route('front.product.index',3) }}">
                                        <img src="{{ asset('assets/frontend/images/banners/ban-5.jpg') }}" alt="banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-4 -->

                            <div class="col-md-8">
                                <div class="banner banner-image">
                                    <a href="{{ route('front.product.index') }}">
                                        <img src="{{ asset('assets/frontend/images/banners/banner-l.jpg') }}" alt="banner">
                                    </a>
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .banners-group -->
                </div><!-- End .col-lg-9 -->

                <aside class="sidebar-home col-lg-3">
                    <div class="widget widget-cats">
                        <h3 class="widget-title">Latest Categories</h3>

                        <ul class="catAccordion">
                            @foreach($categories as $id=>$category)
                                <li>
                                    <a href="{{ route('front.product.index', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="banner banner-image">
                            <a href="{{ route('front.product.index') }}">
                                <img src="{{ asset('assets/frontend/images/banners/banner-side.jpg') }}" alt="banner">
                            </a>
                        </div><!-- End .banner -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">From Our Blog</h3>

                        <article class="entry">
                            <div class="entry-media">
                                <a href=" ">
                                    <img src="{{ asset('assets/frontend/images/blog/sidebar-post.jpg') }}" alt="Post">
                                </a>
                                <div class="entry-date">
                                    {{ date('d')  }}
                                    <span>{{ date('M') }}</span>
                                </div><!-- End .entry-date -->
                            </div><!-- End .entry-media -->

                            <div class="entry-body">

                                <h2 class="entry-title">
                                    <a href="single.html">Tech News</a>
                                </h2>

                                <div class="entry-content">
                                    <p>Lorem Ipsum is simply dummy of the printing and typese ind. Lorem ipsum...</p>

                                    <a href="#" class="read-more">(READ MORE)</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .widget -->

                    <div class="widget widget-block">
                        <h3 class="widget-title">A.I. TECHNOLOGY </h3>

                        <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has beenindustry.</p>
                    </div><!-- End .widget -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-4"></div><!-- margin -->

        <div class="partners-container">
            <div class="container">
                <div class="partners-carousel owl-carousel owl-theme">
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l1.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l4.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l6.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l3.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l5.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l7.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l1.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l2.png') }}" alt="logo">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{ asset('assets/frontend/images/logos/l3.png') }}" alt="logo">
                    </a>
                </div><!-- End .partners-carousel -->
            </div><!-- End .container -->
        </div><!-- End .partners-container -->
@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
