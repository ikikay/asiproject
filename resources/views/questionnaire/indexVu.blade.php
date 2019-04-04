@extends('layout_back')

@section('title')
<h1>
    Questionnaire :
</h1>
@stop

@section('content')
        <div class="flex-center position-ref full-height" id="app"> 
                <questionnaire-component></questionnaire-component>            
        </div>

@stop

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>