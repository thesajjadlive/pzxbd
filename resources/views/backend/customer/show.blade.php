@extends('layouts.back.master')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="search-container text-center">
                    <h4>Customer Details</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th style="width: 30%">First Name</th>
                                <td>{{ $customer->first_name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Last Name</th>
                                <td>{{ $customer->last_name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Phone</th>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Email</th>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Company</th>
                                <td>{{ $customer->company }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Street Address</th>
                                <td>{{ ucfirst($customer->street_address) }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">District</th>
                                <td>{{ ucfirst($customer->district) }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Zip Code</th>
                                <td>{{ $customer->zip }}</td>
                            </tr>
                    </table>
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
