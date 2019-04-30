<?php
if ($lOffre->id) {
    $lesOptions = ['method' => 'put', 'url' => route('offre.update', $lOffre->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('offre.store')];
    $action = "Créer l'offre";
}
$date_offre = "dd/mm/yyyy";
?>
<div class="" style="padding-left:10%;padding-right: 10%">
{!! Form::model($lOffre, $lesOptions) !!}

<div class="form-group">
    <label>Date de l'annonce initial</label>

    <div class="input-group date" id="input_datepicker_offre">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input type="text" class="form-control pull-right datepicker" id="input_datepicker_offre" name="offres_date_offre" value="">
    </div>
</div>

{!! Form::label('offres_poste', 'Poste') !!}
{!! Form::text('offres_poste', null,['class'=> 'form-control'] ) !!}

{!! Form::label('offres_description', 'Description') !!}
{!! Form::textarea('offres_description', null,['class'=> 'form-control', 'rows' => 3] ) !!}

<div class="form-group">
    <label for="niveau_id" class="form-label">Niveau requis</label>

    <select name="niveau_id" class="form-control select2" style="width: 100%;">
        @foreach($lesNiveaux as $unNiveau)
        <option value="{{ $unNiveau->id }}">{{ $unNiveau->niveaux_libelle }}</option>
        @endforeach
    </select>
</div>

{!! Form::label('offres_mois_experience', 'Nombres d\'experiences exprimé en mois :') !!}
{!! Form::text('offres_mois_experience', null,['class'=> 'form-control'] ) !!}

{!! Form::label('contact', 'Contact') !!}
<div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#contact_select" data-toggle="tab">Choix du contact</a></li>
                <li><a href="#contact_create" data-toggle="tab">Création du contact</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="contact_select">

                    <div class="form-group">
                        <label for="contact_id" class="form-label">Contact</label>

                        <select name="contact_id" class="form-control select2" style="width: 100%;">
                            @foreach($lesContacts as $unContact)
                            <option value="{{ $unContact->id }}">{{ $unContact->contacts_nom }} {{ $unContact->contacts_prenom }}, {{ $unContact->societe->societes_libelle }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="contact_create">

                    <?php if (!isset($leContact)) $leContact = new \App\Models\Contact(); ?>
                    <?php $boolNoFormContact = true; ?>
                    @include('admin.contact.form')

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
</div>
<!-- /.row -->

</br>
</div>
<div >
{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}
</div>
   
    <!-- /.col -->
</div>