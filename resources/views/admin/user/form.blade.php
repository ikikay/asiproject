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
<div style="margin-bottom:10px;">
    {!! Form::label('users_nom', 'Nom') !!}
    {!! Form::text('users_nom', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_prenom', 'Prenom') !!}
    {!! Form::text('users_prenom', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_date_de_naissance', 'Date de naissance') !!}
    {!! Form::date('users_date_de_naissance', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('email', 'Adresse courriel ') !!}
    {!! Form::text('email', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_rue', 'Rue') !!}
    {!! Form::text('users_rue', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_ville', 'Ville') !!}
    {!! Form::text('users_ville', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_code_postal', 'CP') !!}
    {!! Form::text('users_code_postal', null,['class'=> 'form-control'] ) !!}
</div>

<div style="margin-bottom:10px;">
    {!! Form::label('users_telephone', 'Telephone') !!}
    {!! Form::text('users_telephone', null,['class'=> 'form-control'] ) !!}
</div>

{!! Form::label('password', 'Mot de passe') !!}
<input id="password" type="password" class="form-control" name="password" value="">
{!! Form::label('password-confirm', 'Confirmation du mot de passe') !!}
<input id="password-confirm" type="password" class="form-control" name="password_confirmation">


</br>


{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}
