@extends('layouts.back.master')

@section('content')

  <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
  <div class="row">
      <div class="col-lg-1"></div>
        <div class="col-lg-10">

            <div class="box box-default">
                <div class="box-body wizard-content">
                    <div class=" ">
                        <h1 class="h4 text-gray-900 mb-4">{{ $title }}!</h1>
                    </div>
                    <form class="user" action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">


                        @include('backend.setting._form')

                        <button type="submit"  class="btn btn-primary float-right">Save</button>

                        <br>
                    </form>
                </div>
                <!-- /.box-body -->
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
