@extends('layouts.front.master')

@section('content')
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div><!-- End .container -->

        </nav><div class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.9755107194586!2d90.38698350054082!3d23.750872330698325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb2b0758f9%3A0xe21afdf459453ff!2sPeopleNTech%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2sbd!4v1574748019598!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div><!-- End #map -->

            <div class="row">
                <div class="col-md-8">
                    <h2 class="light-title">Write <strong>Us</strong></h2>

                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group required-field">
                            <label for="contact-name">Name</label>
                            <input type="text" class="form-control" id="contact-name" value="{{ old('name') }}" name="name" required>
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-email">Email</label>
                            <input type="email" class="form-control" id="contact-email" value="{{ old('email') }}" name="email" required>
                        </div><!-- End .form-group -->

                        <div class="form-group required-field">
                            <label for="contact-message">What’s on your mind?</label>
                            <textarea cols="30" rows="1" id="contact-message" class="form-control" value="{{ old('message') }}" name="message" required></textarea>
                        </div><!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-8 -->

                <div class="col-md-4">
                    <h2 class="light-title">Contact <strong>Details</strong></h2>
                    @foreach($settings as $setting)
                    <div class="contact-info">
                        <div>
                            <i class="icon-phone"></i>
                            <p><a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a></p>
                            <p><a href="tel:{{ $setting->phone_2 }}">{{ $setting->phone_2 }}</a></p>
                        </div>

                        <div>
                            <i class="icon-mail-alt"></i>
                            <p><a href="mailto:{{ $setting->email_1 }}">{{ $setting->email_1 }}</a></p>
                            <p><a href="mailto:{{ $setting->email_2 }}">{{ $setting->email_2 }}</a></p>
                        </div>
                        <div>
                            <i class="icon-skype"></i>
                            <p><a href="skype:{{ $setting->skype_1 }}?call">{{ $setting->skype_1 }}</a> </p>
                            <p><a href="skype:{{ $setting->skype_2 }}?call">{{ $setting->skype_2 }}</a> </p>
                        </div>
                    </div><!-- End .contact-info -->
                    @endforeach
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-8"></div><!-- margin -->
@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

    {{--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>--}}
    <script src="{{ asset('assets/frontend/js/map.js') }}"></script>
@endpush



@push('custom-js')

@endpush
