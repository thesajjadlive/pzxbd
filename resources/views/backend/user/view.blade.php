@extends('layouts.back.master')



@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-2"></div>

                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Profile Information</h1>
                        </div>
                        <table class="table table-hover">
                            <tr>
                                <th> </th>
                                <td><img class="img-fluid" style="max-width: 30%" src="{{ asset(isset(Auth::user()->image)?Auth::user()->image:'images/users/user.png') }}"></td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ Auth::user()->type }}</td>
                            </tr>
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
