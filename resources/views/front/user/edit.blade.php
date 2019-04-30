@extends('layout_back')

@section('title')
<h1>
    Modication d'un utilisateur
    <small>- Modication d'un utilisateur</small>
</h1>
@stop

@section('content')

@include('admin.user.form')

@stop


@section('script')
<script>
    $(document).ready(function () {
        $('#password').val("");
    });
</script>
@stop