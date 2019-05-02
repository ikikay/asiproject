@extends('layout_back')

@section('title')
<h1>
    Administration des sociétés
    <small>- Rechercher, Modifier et Supprimer des sociétés</small>
</h1>
@stop

@section('content')

<!-- Main content -->
<div class="row">
    <div class="col-md-12"style="padding-left:10%;padding-right: 10%">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <!-- search form (Optional) -->
                    
<div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="thead-inverse" >
                            <tr>

                                <th class="text-center">Libelle</th>
                                <th class="text-center">Rue</th>
                                <th class="text-center">Code Postal</th>
                                <th class="text-center">ville</th>
                                <th class="text-center">Telephone</th>
                                <th class="text-center">Adresse courriel</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_societes as $uneSociete)
                            <tr>

                                <td class="col-md-5 text-center"  id="maintd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['societes_libelle'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="ruetd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['societes_rue'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="code_postaltd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['societes_code_postal'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="villetd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['societes_ville'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="telephoneld{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['societes_telephone'] }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="emailtd{{ $uneSociete["id"] }}">
                                    <h4> {{ $uneSociete['societes_email'] }}</h4>
                                </td>

                                <td class="col-md-1 text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["societe.edit", $uneSociete->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["societe.destroy", $uneSociete->id], 'method' => 'delete', 'id' => "form".$uneSociete->id]) !!}
                                            <button type="submit" id="{{ $uneSociete->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
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
                                        <div class="col-md-3">
                                    {!! Form::open(['route' => "societe.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouvelle société</button>
                                    {!! Form::close() !!}
       </div>                      
    </div>
</div>

@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop