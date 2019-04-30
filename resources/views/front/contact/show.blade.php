@extends('layout_back')

@section('title')
<h1>
    Details d'un contact
    <small>- Details d'un contact</small>
</h1>
@stop



@section('content')
<div class="" style="padding-left:10%;padding-right: 10%">



{!! Form::label('contacts_fonction', 'Fonction') !!}
{!! Form::label($leContact->contacts_fonction, null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_nom', 'Nom') !!}
{!! Form::label($leContact->contacts_nom, null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_prenom', 'Prenom') !!}
{!! Form::label($leContact->contacts_prenom, null,['class'=> 'form-control'] ) !!}


{!! Form::label('contacts_telephone', 'Telephone') !!}
{!! Form::label($leContact->contacts_telephone, null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_email', 'Adresse courriel') !!}
{!! Form::label($leContact->contacts_email, null,['class'=> 'form-control'] ) !!}

{!! Form::label('$leContact->societe->societes_libelle ', 'societe') !!}
{!! Form::label($leContact->societe->societes_libelle , null,['class'=> 'form-control'] ) !!}

</br>


</div>
@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop