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
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn bg-blue btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered" >
                        <thead class="thead-inverse" >
                            <tr>

                                <th class="text-center">Libelle</th>
                                <th class="text-center">Nombre de questions</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_questionnaires as $unQuestionnaire)
                            <tr>

                                <td class="col-md-2 text-center"  id="maintd{{ $unQuestionnaire["id"] }}">
                                    <h4>{{ $unQuestionnaire->libelle }}</h4>
                                </td>

                                <td class="col-md-3 text-center"  id="nbrtd{{ $unQuestionnaire["id"] }}">
                                    <h4> TODO </h4>
                                </td>

                                <td class="col-md-1 text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["questionnaire.edit", $unQuestionnaire->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["questionnaire.destroy", $unQuestionnaire->id], 'method' => 'delete', 'id' => "form".$uneOffre->id]) !!}
                                            <button type="submit" id="{{ $unQuestionnaire->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="col-md-12 text-center" colspan="7">
                                    {!! Form::open(['route' => "questionnaire.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouveau questionnaire</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody> 
                    </table>   
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop