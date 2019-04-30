@extends('layout_back')

@section('title')
<h1>
    Details d'un contact
    <small>- Details d'un contact</small>
</h1>
@stop



@section('content')
<div class="" style="padding-left:10%;padding-right: 10%">



{!! Form::label('societes_libelle', 'Libelle') !!}
{!! Form::label($laSociete->societes_libelle, null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_rue', 'Rue') !!}
{!! Form::label($laSociete->societes_rue, null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_code_postal', 'Code Postal') !!}
{!! Form::label($laSociete->societes_code_postal, null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_ville', 'Ville') !!}
{!! Form::label($laSociete->societes_ville, null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_telephone', 'Telephone') !!}
{!! Form::label($laSociete->societes_telephone, null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_email', 'Adresse courriel') !!}
{!! Form::label($laSociete->societes_email, null,['class'=> 'form-control'] ) !!}



</br>


</div>
@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop