@extends('layout_back')

@section('title')
<h1>
    Administration des contacts
    <small>- Rechercher, Modifier et Supprimer des contacts</small>
</h1>
@stop

@section('content')

<!-- Main content -->
<div class="row">
    <div class="col-md-12"  style="padding-left:10%;padding-right: 10%">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    <!-- search form (Optional) -->
                   
<div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="thead-inverse" >
                            <tr>

                                <th class="text-center">Fonction</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prenom</th>
                                <th class="text-center">Telephone</th>
                                <th class="text-center">Adresse courriel</th>
                                <th class="text-center">Société</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_contacts as $unContact)
                            <tr>

                                <td class="col-md-1 text-center"  id="fonctiontd{{ $unContact["id"] }}">
                                    <h4>{{ $unContact['contacts_fonction'] }} </h4>
                                </td>

                                <td class="col-md-4 text-center"  id="maintd{{ $unContact["id"] }}">
                                    <h4>{{ $unContact['contacts_nom'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="prenomtd{{ $unContact["id"] }}">
                                    <h4>{{ $unContact['contacts_prenom'] }} </h4>
                                </td>

                                <td class="col-md-1 text-center"  id="telephonetd{{ $unContact["id"] }}">
                                    <h4>{{ $unContact['contacts_telephone'] }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="emaild{{ $unContact["id"] }}">
                                    <h4>{{ $unContact['contacts_email'] }} </h4>
                                </td>

                                <td class="col-md-2 text-center"  id="societetd{{ $unContact["id"] }}">
                                    <h4> {{ $unContact->societe->societes_libelle }}</h4>
                                </td>

                                <td class="col-md-1 text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["contact.edit", $unContact->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["contact.destroy", $unContact->id], 'method' => 'delete', 'id' => "form".$unContact->id]) !!}
                                            <button type="submit" id="{{ $unContact->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody> 
                    </table> 
</div>
                </div>
            </div>
        </div>
            
                                <div class="col-md-3">
                                    {!! Form::open(['route' => "contact.create", 'method' => 'get']) !!}
                                    <button type="submit" class="btn bg-blue btn-lg btn-block" style="">Nouveau Contact</button>
                                    {!! Form::close() !!}
                                </div>
                            
    </div>
    
</div>


@stop

@section('script')

<script src="{{ url('js/perso/jsDeleteButton.js') }}"></script>

@stop