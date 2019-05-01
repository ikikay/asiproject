@component('mail::message')

salut julian un nouvel utilisateur a été ajouté:<br/><br/>

{{ $user->users_nom }}<br/>
{{ $user->users_prenom }}<br/>
{{ $user->email }}<br/>

@component('mail::button', ['url' => url('/')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
