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
                                <th class="text-center">Nom</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_promos as $unePromo)
                            <tr>

                                <td class="col-md-5 text-center"  id="maintd{{ $unePromo["id"] }}">
                                    <h4>{{ $unePromo['libelle'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="ruetd{{ $unePromo["id"] }}">
                                    <h4>{{ $unePromo['nom'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["promo.edit", $unePromo->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["promo.destroy", $unePromo->id], 'method' => 'delete', 'id' => "form".$unePromo->id]) !!}
                                            <button type="submit" id="{{ $unePromo->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="col-md-12 text-center" colspan="7">
                                    {!! Form::open(['route' => "promo.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block">Nouvelle promotion</button>
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