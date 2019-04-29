@extends('layouts.app')

@section('css')
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('css/AdminLTE.min.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top:5%">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('S\'enregistrer') }}</div>

                <div class="card-body">

                    @include('admin.user.form')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection