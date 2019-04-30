@extends('layout_back')

@section('title')
<h1>
    Details d'un contact
    <small>- Details d'un contact</small>
</h1>
@stop



@section('content')
<div class="" style="padding-left:10%;padding-right: 10%">



{!! Form::label('Date initial du poste', 'Poste') !!}
{!! Form::label($lOffre->offres_date_offre , null,['class'=> 'form-control'] ) !!}

{!! Form::label('offres_poste', 'Poste') !!}
{!! Form::label($lOffre->offres_poste, null,['class'=> 'form-control'] ) !!}

{!! Form::label('offres_description', 'Description') !!}
{!! Form::label($lOffre->offres_description, null,['class'=> 'form-control', 'rows' => 3] ) !!}



{!! Form::label('Niveaux', 'Niveaux') !!}
{!! Form::label($lOffre->niveau->niveaux_libelle, null,['class'=> 'form-control', 'rows' => 3] ) !!}

{!! Form::label('offres_mois_experience', 'Nombres d\'experiences exprimé en mois :') !!}
{!! Form::label($lOffre->offres_mois_experience, null,['class'=> 'form-control'] ) !!}



</br>


</div>
@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop