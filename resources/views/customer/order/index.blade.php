@extends('layouts.front.master')

@section('content')
    <div class="container">
        <div class="row" style="height: 30px"></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Orders </div>
                    <div class="card-body">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Order Number</th>
                                <th>Total Amount</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $order->order_number }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ ucfirst($order->status) }}</td>
                                    <td>{{ ucfirst($order->payment_status) }}</td>
                                    <td>
                                        <a href="{{ route('myorder.show',$order->id) }}" class="btn btn-sm btn-info">Details</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <span class="float-right">{{ $orders->render() }}</span>
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
