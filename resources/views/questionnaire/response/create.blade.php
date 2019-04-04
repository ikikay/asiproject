@extends('layout_back')

@section('title')
<h1>
    Répondre au questionnaire
    <small>- {!! $leQuestionnaire->questionnaires_libelle !!}</small>
</h1>
@stop

@section('content')

@include('questionnaire.response.form')

@stop


@section('script')
@stop