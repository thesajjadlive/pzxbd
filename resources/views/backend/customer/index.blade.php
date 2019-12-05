@extends('layouts.back.master')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="search-container float-right">
                    <form class="form-inline">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search.." name="search">
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
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a href="{{ route('customer.show',$customer->id) }}" class="btn btn-sm btn-info">Details</a>
                                    {{--<form action="{{ route('category.destroy',$category->id) }}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></button>
                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <span class="float-right">{{ $customers->render() }}</span>
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
