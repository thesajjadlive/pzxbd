@extends('layouts.back.master')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="search-container float-right">
                    <form class="form-inline">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Order Number.." name="search">
                        </div>
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order Number</th>
                            <th>Customer Name</th>
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
                                <td>{{ $order->customer->first_name.' '.$order->customer->last_name }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header">Change Status</li>
                                            <li>
                                                @if($order->status != 'processing')
                                                    <a href="{{ route('changeStatus',[$order->id,'processing']) }}" onclick="return confirm('Are you confirm to change status?')">Processing</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if($order->status != 'shipping')
                                                    <a href="{{ route('changeStatus',[$order->id,'shipping']) }}" onclick="return confirm('Are you confirm to change status?')">Shipping</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if($order->status != 'delivered')
                                                    <a href="{{ route('changeStatus',[$order->id,'delivered']) }}" onclick="return confirm('Are you confirm to change status?')">Delivered</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if(auth()->user()->type != 'operator')
                                                    @if($order->status != 'canceled')
                                                        <a href="{{ route('changeStatus',[$order->id,'canceled']) }}" onclick="return confirm('Are you confirm to change status?')">Canceled</a>
                                                    @endif
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('order.show',$order->id) }}" class="btn btn-sm btn-info">Details</a>
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
@endsection




@push('library-css')

@endpush





@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush
