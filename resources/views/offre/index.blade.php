@extends('layout_back')

@section('title')
<h1>
    Administration des offres d'emploi
    <small>- Rechercher, Modifier et Supprimer des offres</small>
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

                                <th class="text-center">Entreprise</th>
                                <th class="text-center">Nom du Poste</th>
                                <th class="text-center">Date de l'offre</th>
                                <th class="text-center">Niveau requis</th>
                                <th class="text-center">Expérience attendu</th>
                                <th class="text-center">Type de contrat</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_offres as $uneOffre)
                            <tr>

                                <td class="col-md-2 text-center"  id="societetd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->contact->societe->libelle }}</h4>
                                </td>

                                <td class="col-md-3 text-center"  id="maintd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->poste }}</h4>
                                </td>

                                <td class="col-md-1 text-center"  id="date_offretd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->date_offre->format('d/m/Y') }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="niveautd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->niveau->libelle }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="experiencetd{{ $uneOffre["id"] }}">
                                    <h4> {{ $uneOffre['mois_experience'] }} mois</h4>
                                </td>

                                <td class="col-md-2 text-center"  id="contrattd{{ $uneOffre["id"] }}">
                                    <h4>TODO</h4>
                                </td> 

                                <td class="col-md-1 text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["offre.edit", $uneOffre->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["offre.destroy", $uneOffre->id], 'method' => 'delete', 'id' => "form".$uneOffre->id]) !!}
                                            <button type="submit" id="{{ $uneOffre->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="col-md-12 text-center" colspan="7">
                                    {!! Form::open(['route' => "offre.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouvelle offre</button>
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