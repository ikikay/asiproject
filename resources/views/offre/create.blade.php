@extends('layout_back')

@include('offre.css')

@section('title')
<h1>
    Enregistrement d'une offre
    <small>- Enregistrement d'une offre</small>
</h1>
@stop

@section('content')

@include('offre.form')

@stop

@include('offre.script')