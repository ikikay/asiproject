<?php
if ($lOffre->id) {
    $lesOptions = ['method' => 'put', 'url' => route('offre.update', $lOffre->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('offre.store')];
    $action = "Créer l'offre";
}
?>

{!! Form::model($lOffre, $lesOptions) !!}

{!! Form::label('poste', 'Poste') !!}
{!! Form::text('poste', null,['class'=> 'form-control'] ) !!}

{!! Form::label('description', 'Description') !!}
{!! Form::textarea('description', null,['class'=> 'form-control', 'rows' => 3] ) !!}

<div class="form-group">
    <label for="niveau_id" class="form-label">Niveau requis</label>

    <select name="niveau_id" class="form-control select2" style="width: 100%;">
        @foreach($lesNiveaux as $unNiveau)
        <option value="{{ $unNiveau->id }}">{{ $unNiveau->libelle }}</option>
        @endforeach
    </select>
</div>

{!! Form::label('mois_experience', 'Nombres d\'experiences exprimé en mois :') !!}
{!! Form::text('mois_experience', null,['class'=> 'form-control'] ) !!}

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
                            <option value="{{ $unContact->id }}">{{ $unContact->nom }}, {{ $unContact->prenom }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="contact_create">
                    
                    <?php if (!isset($leContact)) $leContact = new \App\Models\Contact(); ?>
                    @include('contact.form')

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

{!! Form::submit($action, ['class'=> 'btn bg-blue btn-lg btn-block']) !!}

{!! Form::close()!!}