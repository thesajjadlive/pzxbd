@extends('layouts.front.master')

@section('content')
    <div class="container">
        <div class="row" style="height: 30px"></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order Details </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th style="width: 30%">Order Number</th>
                                <td>{{ $order->order_number }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Date</th>
                                <td>{{ $order->date }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Status</th>
                                <td>{{ ucfirst($order->status) }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Total Amount</th>
                                <td>{{ $order->total_price }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Payment Status</th>
                                <td>{{ ucfirst($order->payment_status) }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Payment Type</th>
                                <td>{{ ucfirst($order->payment_type) }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Shipping Address</th>
                                <td>{{ $order->customer->street_address.', '.$order->customer->district.', '.$order->customer->zip }}</td>
                            </tr>
                            <tr>
                                <th>Products</th>
                                <td>
                                    <table>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total (Without Shipping)</th>
                                        </tr>
                                        @foreach($order->order_detail as $index=>$item)
                                            <tr>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td class="text-right">{{ $item->total }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
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
