@extends('layout_back')

@include('offre.css')

@section('title')
<h1>
    Modication d'une offre
    <small>- Modication d'une offre</small>
</h1>
@stop

@section('content')

@include('offre.form')

@stop

@include('offre.script')