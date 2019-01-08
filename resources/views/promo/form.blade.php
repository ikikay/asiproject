<?php
if ($laPromo->id) {
    $lesOptions = ['method' => 'put', 'url' => route('promo.update', $unePromo->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('promo.store')];
    $action = "Créer la société";
}
?>

@if(!isset($boolNoFormSociete))
{!! Form::model($laPromo, $lesOptions) !!}
@endif

{!! Form::label('libelle', 'Libelle') !!}
{!! Form::text('libelle', null,['class'=> 'form-control'] ) !!}

{!! Form::label('nom', 'Nom') !!}
{!! Form::text('nom', null,['class'=> 'form-control'] ) !!}

</br>

@if(!isset($boolNoFormSociete))
{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}
@endif