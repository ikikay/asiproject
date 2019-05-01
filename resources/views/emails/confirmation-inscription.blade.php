@component('mail::message')
# Introduction

Hello {{ $user->users_nom }},
Votre compte à été validé par l'administrateur.


@component('mail::button', ['url' => url("/login")])
Connexion
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
