<?php
if ($laSociete->id) {
    $lesOptions = ['method' => 'put', 'url' => route('societe.update', $laSociete->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('societe.store')];
    $action = "Créer la société";
}
?>

{!! Form::model($laSociete, $lesOptions) !!}

{!! Form::label('libelle', 'Libelle') !!}
{!! Form::text('libelle', null,['class'=> 'form-control'] ) !!}

{!! Form::label('rue', 'Rue') !!}
{!! Form::text('rue', null,['class'=> 'form-control'] ) !!}

{!! Form::label('code_postal', 'Code Postal') !!}
{!! Form::text('code_postal', null,['class'=> 'form-control'] ) !!}

{!! Form::label('ville', 'Ville') !!}
{!! Form::text('ville', null,['class'=> 'form-control'] ) !!}

{!! Form::label('telephone', 'Telephone') !!}
{!! Form::text('telephone', null,['class'=> 'form-control'] ) !!}

{!! Form::label('email', 'Adresse courriel') !!}
{!! Form::text('email', null,['class'=> 'form-control'] ) !!}

</br>

{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}