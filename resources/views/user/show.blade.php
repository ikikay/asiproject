@extends('layout_back')

@section('title')
<div class="page-header">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="{{ route('dashboard') }}"></a>
            <img src="{{url('img/logo_lycée.jpg') }}" />           
        </div>
        <div class="row">
            @if ($aRep)
            <div class="alert alert-success">
                Le questionnaire a bien été fait !
            </div>
            @else
            <div class="alert alert-danger">
                vous n'avez pas fait le questionnaire !
            </div>
            @endif

            <h1 class="text-center">Mon profile</h1>
        </div>
    </div>    
</div>
@stop

@section('content')
<div class="col-md-12">
    <div class="container">
        <div class="row">

        </div>        
    </div>
</div>

@stop