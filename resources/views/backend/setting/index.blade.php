@extends('layouts.back.master')


@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if($setting==null)
                    <form action="{{ route('setting.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-outline-dark float-left">Add Information</button>
                    </form>
                {{--<a class="btn btn-outline-dark float-left" href="{{ route('setting.create') }}">Add Information</a>--}}
                @endif
                <div class="search-container float-right">

                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Setting Information <span class="float-right"><a href="{{ route('setting.edit',$setting->id) }}" class="btn btn-primary card-edit">Edit</a></span></div>
                    <div class="card-body col-md-12">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th width="30%">Site Title</th>
                                <td>{{ $setting->title }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $setting->address }}</td>
                            </tr>
                            <tr>
                                <th>Shipping Charge</th>
                                <td>{{ $setting->shipping }}</td>
                            </tr>
                            <tr>
                                <th>Free Shipping On(Ammount)</th>
                                <td>{{ $setting->free_shipping }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $setting->phone_1 }}</td>
                            </tr>
                            <tr>
                                <th>Phone (Secondary)</th>
                                <td>{{ $setting->phone_2 }}</td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>{{ $setting->email_1 }}</td>
                            </tr>
                            <tr>
                                <th>E-mail (Secondary)</th>
                                <td>{{ $setting->email_2 }}</td>
                            </tr>
                            <tr>
                                <th>Skype</th>
                                <td>{{ $setting->skype_1 }}</td>
                            </tr>
                            <tr>
                                <th>Skype (Secondary)</th>
                                <td>{{ $setting->skype_2 }}</td>
                            </tr>
                            <tr>
                                <th>Facebook Link</th>
                                <td>{{ $setting->facebook }}</td>
                            </tr>
                            <tr>
                                <th>Twitter Link</th>
                                <td>{{ $setting->twitter }}</td>
                            </tr>
                            <tr>
                                <th>Linkedin Link</th>
                                <td>{{ $setting->linkedin }}</td>
                            </tr>
                            <tr>
                                <th>History</th>
                                <td>{{ $setting->history }}</td>
                            </tr>
                            <tr>
                                <th>Mission</th>
                                <td>{{ $setting->mission }}</td>
                            </tr>
                            <tr>
                                <th>Vision</th>
                                <td>{{ $setting->vision }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
