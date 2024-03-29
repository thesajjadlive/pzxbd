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
                            <th>Subscribers Email</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($subscribers as $subscriber)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ ucfirst($subscriber->email) }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <span class="float-right">{{ $subscribers->render() }}</span>
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
