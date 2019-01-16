<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ThemesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('themes')->insert([
            [
                'id' => 1,
                'libelle' => 'Informations personnelles',
                'questionnaires_id' => 1
            ],
            [
                'id' => 2,
                'libelle' => 'Votre employeur',
                'questionnaires_id' => 1
            ],
            [
                'id' => 3,
                'libelle' => 'Votre premier emploi',
                'questionnaires_id' => 1
            ],
            [
                'id' => 4,
                'libelle' => 'Votre emploi actuel',
                'questionnaires_id' => 1
            ],
            [
                'id' => 5,
                'libelle' => 'La formation ASI',
                'questionnaires_id' => 1
            ],
            [
                'id' => 6,
                'libelle' => 'Vos compétences',
                'questionnaires_id' => 1
            ],
            [
                'id' => 7,
                'libelle' => 'Votre ressentis',
                'questionnaires_id' => 1
            ],
            [
                'id' => 8,
                'libelle' => 'Votre avis',
                'questionnaires_id' => 1
            ]
        ]);
    }

}
