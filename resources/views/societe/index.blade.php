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

                                <td class="col-md-1 text-center"  id="maintd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['libelle'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="ruetd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['rue'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="code_postaltd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['code_postal'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="villetd{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['ville'] }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="telephoneld{{ $uneSociete["id"] }}">
                                    <h4>{{ $uneSociete['telephone'] }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="emailtd{{ $uneSociete["id"] }}">
                                    <h4> {{ $uneSociete['email'] }}</h4>
                                </td>

                                <td class="col-md-3 text-center">
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
                                <td class="col-md-9 text-center" colspan="6">
                                    {!! Form::open(['route' => "societe.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouvelle société</button>
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