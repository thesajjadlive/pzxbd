@extends('layouts.back.master')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="search-container text-center">
                    <h4>Order Details <span><a class="btn btn-sm btn-outline-secondary float-right" href="JavaScript:window.print();">Print Page</a></span></h4>
                </div>
            </div>
            <div class="card-body" id="printcontent">
                <div class="table-responsive">
                    <h4>PZXBD</h4>
                    <p>www.pzxbd.com</p>
                    <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th style="width: 30%">Order Number</th>
                                <td>{{ $order->order_number }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Total Amount</th>
                                <td>{{ $order->total_price }}</td>
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
                                <th style="width: 30%">Customer Name</th>
                                <td>{{ $order->customer->first_name.' '.$order->customer->last_name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Customer Email</th>
                                <td>{{ $order->customer->email }}</td>
                            </tr>
                            <tr>
                                <th style="width: 30%">Customer Phone</th>
                                <td>{{ $order->customer->phone }}</td>
                            </tr>
                        <tr>
                            <th>Cart</th>
                            <td>
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                        <th>Product Total</th>
                                    </tr>
                                    @foreach($order->order_detail as $index=>$item)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $item->product_name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td class="text-right">{{ $item->total }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th class="text-right" colspan="4">Coupon Discount</th>
                                        <th class="text-right">{{ $order->discount }}</th>
                                    </tr>
                                    <tr>
                                        <th class="text-right" colspan="4">Total</th>
                                        <th class="text-right">{{ $order->total_price }}</th>
                                    </tr>
                                </table>
                            </td>
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
    <style type="text/css">
        @media print
        {
            body * { visibility: hidden; }
            #printcontent * { visibility: visible; }
            #printcontent { position: absolute; top: 50px; left: 30px; }
        }
    </style>
@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
