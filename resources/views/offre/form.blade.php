<?php
if ($lOffre->id) {
    $lesOptions = ['method' => 'put', 'url' => route('offre.update', $lOffre->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('offre.store')];
    $action = "Créer";
}
?>

{!! Form::model($lOffre, $lesOptions) !!}

{!! Form::label('poste', 'Poste') !!}
{!! Form::text('poste', null,['class'=> 'form-control'] ) !!}

{!! Form::label('prenom', 'Prenom') !!}
{!! Form::text('prenom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('email', 'E-mail') !!}
{!! Form::text('email', null,['class'=> 'form-control'] ) !!}


</br>

{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}