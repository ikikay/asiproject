@extends('layout_back')

@include('admin.offre.css')

@section('title')
<h1>
    Enregistrement d'une offre
    <small>- Enregistrement d'une offre</small>
</h1>
@stop

@section('content')

@include('admin.offre.form')

@stop

@include('admin.offre.script')