<?php
if (Auth::user()) {
    if ($leUser->id) {
        $lesOptions = ['method' => 'put', 'url' => route('user.update', $leUser->id)];
        $action = "Modifier";
    } else {
        $lesOptions = ['method' => 'post', 'url' => route('user.store')];
        $action = "Créer l'utilisateur";
    }
} else {
    $lesOptions = ['method' => 'post', 'url' => route('register')];
    $action = "S'inscrire";
}
?>

{!! Form::model($leUser, $lesOptions) !!}

{!! Form::label('users_nom', 'Nom') !!}
{!! Form::text('users_nom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('users_prenom', 'Prenom') !!}
{!! Form::text('users_prenom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('email', 'Adresse courriel ') !!}
{!! Form::text('email', null,['class'=> 'form-control'] ) !!}

{!! Form::label('password', 'Mot de passe') !!}
<input id="password" type="password" class="form-control" name="password" value="">

{!! Form::label('password-confirm', 'Confirmation du mot de passe') !!}
<input id="password-confirm" type="password" class="form-control" name="password_confirmation">


</br>

{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}