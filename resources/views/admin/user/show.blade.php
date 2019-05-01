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
            <div class="alert alert-success text-center">
                Le questionnaire a bien été fait !
            </div>
            @else
            <div class="alert alert-danger text-center">
                Vous n'avez pas fait le questionnaire !
            </div>
            @endif

            @if($contact == false)
            <div class="col-md-12">
                <p> N'oubliez pas de renseigner un contact ! <a href='{{url('contact/createFront')}}'>Ajouter un contact</a></p>
            </div>
            @endif
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