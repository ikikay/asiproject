


<?php

    $lesOptions = ['method' => 'post', 'url' => route('contact.storeFront')];
    $action = "Créer le contact";

?>
<div class="" style="padding-left:10%;padding-right: 10%">

@if(!isset($boolNoFormContact))
{!! Form::model($leContact, $lesOptions) !!}
@endif

{!! Form::label('contacts_fonction', 'Fonction') !!}
{!! Form::text('contacts_fonction', null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_nom', 'Nom') !!}
{!! Form::text('contacts_nom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_prenom', 'Prenom') !!}
{!! Form::text('contacts_prenom', null,['class'=> 'form-control'] ) !!}


{!! Form::label('contacts_telephone', 'Telephone') !!}
{!! Form::text('contacts_telephone', null,['class'=> 'form-control'] ) !!}

{!! Form::label('contacts_email', 'Adresse courriel') !!}
{!! Form::text('contacts_email', null,['class'=> 'form-control'] ) !!}

{!! Form::label('societe', 'Societe') !!}
<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#societe_select" data-toggle="tab">Choix de la societe</a></li>
                <li><a href="#societe_create" data-toggle="tab">Création de la societe</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="societe_select">

                    <div class="form-group">
                        <label for="societe_id" class="form-label">Société</label>

                        <select name="societe_id" class="form-control select2" style="width: 100%;">
                            @foreach($lesSocietes as $uneSociete)
                            <option value="{{ $uneSociete->id }}">{{ $uneSociete->societes_libelle }} {{ $uneSociete->societes_ville }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="societe_create">

                    <?php if (!isset($laSociete)) $laSociete = new \App\Models\Societe(); ?>
                    <?php $boolNoFormSociete = true; ?>
                    @include('front.societe.form')

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

</br>
<div class="text-center" style="width:190px">
@if(!isset($boolNoFormContact))
{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}
</div>

</div>
@endif