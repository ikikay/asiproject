<?php
if ($leContact->id) {
    $lesOptions = ['method' => 'put', 'url' => route('contact.update', $leContact->id)];
    $action = "Modifier";
} else {
    $lesOptions = ['method' => 'post', 'url' => route('contact.store')];
    $action = "Créer le contact";
}
?>

{!! Form::model($leContact, $lesOptions) !!}

{!! Form::label('fonction', 'Fonction') !!}
{!! Form::text('fonction', null,['class'=> 'form-control'] ) !!}

{!! Form::label('nom', 'Nom') !!}
{!! Form::text('nom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('prenom', 'Prenom') !!}
{!! Form::text('prenom', null,['class'=> 'form-control'] ) !!}

{!! Form::label('ville', 'Ville') !!}
{!! Form::text('ville', null,['class'=> 'form-control'] ) !!}

{!! Form::label('rue', 'Rue') !!}
{!! Form::text('rue', null,['class'=> 'form-control'] ) !!}

{!! Form::label('code_postal', 'Code Postal') !!}
{!! Form::text('code_postal', null,['class'=> 'form-control'] ) !!}

{!! Form::label('telephone', 'Telephone') !!}
{!! Form::text('telephone', null,['class'=> 'form-control'] ) !!}

{!! Form::label('email', 'Adresse courriel') !!}
{!! Form::text('email', null,['class'=> 'form-control'] ) !!}

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
                            <option value="{{ $uneSociete->id }}">{{ $uneSociete->libelle }}, {{ $unContact->ville }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="societe_create">

                    <?php if (!isset($laSociete)) $laSociete = new \App\Models\Societe(); ?>                   
                    @include('societe.form')

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