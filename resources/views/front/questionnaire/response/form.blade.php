<?php
if (false) {
    $lesOptions = ['method' => 'put', 'url' => route('valideResponse', $leQuestionnaire->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('valideResponse')];
    $action = "Valider ces réponses";
}
?>

{!! Form::model($leQuestionnaire, $lesOptions) !!}
    @foreach ($leQuestionnaire->themes as $theme)
	<h4> {{$theme->themes_libelle}} </h4>
	@foreach ($theme->questions as $question)
	    {!! Form::label('question' . $question->id, $question->questions_libelle) !!}</br>
	    @forelse ($question->reponsesPredefinie as $reponseP)
		@if ($reponseP->reponses_predefinies_is_radio)
		    <input type="radio" value="{{ $reponseP->reponses_predefinies_libelle }}" name="reponseP_{{ $reponseP->question_id }}"> {{ $reponseP->reponses_predefinies_libelle }}</br>
		@elseif ($reponseP->reponses_predefinies_is_checkbox)
		    <input type="checkbox" value="{{ $reponseP->reponses_predefinies_libelle }}" name="reponseP_{{ $reponseP->question_id }}_{{ $reponseP->id }}"> {{ $reponseP->reponses_predefinies_libelle }}</br>
		@else
		    <input type="checkbox" value="{{ $reponseP->reponses_predefinies_libelle }}" name="reponseP_{{ $reponseP->question_id }}_{{ $reponseP->id }}"> {{ $reponseP->reponses_predefinies_libelle }}</br>
		@endif
	    @empty
		{!! Form::textarea('reponseP_' . $question->id, null, ['rows' => 1, 'class'=> 'form-control']) !!}
	    @endforelse
	@endforeach
	
	@if( !next( $theme ))
	    </br><hr/></br> {{ !next( $theme ) }}
	@else
	    </br><hr/></br> {{ !next( $theme ) }}
	@endif
	
	
    @endforeach
{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}