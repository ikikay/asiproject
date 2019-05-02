@extends('layout_back')

@section('title')
<h1>
    Administration des questionnaires
    <small>- Rechercher, Modifier et Supprimer des questionnaires</small>
</h1>
@stop

@section('content')

<!-- Main content -->
<div class="row">
    <div class="col-md-12" style="padding-left:10%;padding-right: 10%">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <!-- search form (Optional) -->
                    
<div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="thead-inverse" >
                            <tr>

                                <th class="text-center">Libelle</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_questionnaires as $unQuestionnaire)
                            <tr>

                                <td class="col-md-2 text-center"  id="maintd{{ $unQuestionnaire["id"] }}">
                                    <h4>{{ $unQuestionnaire->questionnaires_libelle }}</h4>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="col-md-12 text-center" colspan="7">
                                  
                                </td>
                            </tr>
                        </tbody> 
                    </table>   
</div>
                </div>
            </div>
        </div>
            <div class="col-md-3 text-center"
      {!! Form::open(['route' => "questionnaire.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouveau questionnaire</button>
                                    {!! Form::close() !!}
    </div>
    </div>

</div>

@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop