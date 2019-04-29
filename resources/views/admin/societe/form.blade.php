<?php
if ($laSociete->id) {
    $lesOptions = ['method' => 'put', 'url' => route('societe.update', $laSociete->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('societe.store')];
    $action = "Créer la société";
}
?>
<div class="" style="padding-left:10%;padding-right: 10%">
@if(!isset($boolNoFormSociete))
{!! Form::model($laSociete, $lesOptions) !!}
@endif

{!! Form::label('societes_libelle', 'Libelle') !!}
{!! Form::text('societes_libelle', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_rue', 'Rue') !!}
{!! Form::text('societes_rue', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_code_postal', 'Code Postal') !!}
{!! Form::text('societes_code_postal', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_ville', 'Ville') !!}
{!! Form::text('societes_ville', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_telephone', 'Telephone') !!}
{!! Form::text('societes_telephone', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societes_email', 'Adresse courriel') !!}
{!! Form::text('societes_email', null,['class'=> 'form-control'] ) !!}

</br>
<div class="text-center" style="width:190px">
@if(!isset($boolNoFormSociete))
{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}

@endif
</div>
</div>