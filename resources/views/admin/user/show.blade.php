@extends('layout_back')

@section('title')
<div class="page-header">
    <div class="container">
        <div class="row">
            <a class="navbar-brand" href="{{ route('dashboard') }}"></a>
            <img src="{{url('img/logo_lycée.jpg') }}" />           
        </div>
        @if (Auth::user()->role == "user")
        <div class="row">
            @if ($aRep)
            <div class="alert alert-success text-center">
                Le questionnaire a bien été fait !
            </div>
            @else
            <div class="text-center">
            {!! Form::open(['url' => ["questionnaire/indexFront",], 'method' => 'get']) !!}
            <button type="submit" class="btn btn-danger btn-lg">Remplir le questionnaire</button>
            {!! Form::close() !!}   
            </div>
            @endif
            <br/>
            
            @if($contact == false)
            <div class="text-center">
            {!! Form::open(['url' => ["contact/createFront",], 'method' => 'get']) !!}
            <button type="submit" class="btn btn-warning btn-lg">Ajoutez un contact</button>
            {!! Form::close() !!} 
            </div>
            @endif
        </div>
        @endif
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