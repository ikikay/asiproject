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
    <div class="col-md-12" style="padding-left:10%;padding-right: 10%">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <!-- search form (Optional) -->
                    
<div class="table-responsive">
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
                                    <h4>{{ $uneOffre->contact->societe->societes_libelle }}</h4>
                                </td>

                                <td class="col-md-3 text-center"  id="maintd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->offres_poste }}</h4>
                                </td>

                                <td class="col-md-1 text-center"  id="date_offretd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->offres_date_offre->format('d/m/Y') }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="niveautd{{ $uneOffre["id"] }}">
                                    <h4>{{ $uneOffre->niveau->niveaux_libelle }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="experiencetd{{ $uneOffre["id"] }}">
                                    <h4> {{ $uneOffre['offres_mois_experience'] }} mois</h4>
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

                            </tr>
                        </tbody> 
                    </table>   
                    </div>
                </div>
                
            </div>
            
        </div>
        
      <div class="col-md-3 ">
       {!! Form::open(['route' => "offre.create", 'method' => 'get']) !!}
      <button type="submit" class="btn bg-blue btn-lg btn-block">Nouvelle offre</button>
      {!! Form::close() !!}
       </div>
    </div>
</div>
    

@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop