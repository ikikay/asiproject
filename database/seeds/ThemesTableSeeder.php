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
                'themes_libelle' => 'Informations personnelles',
                'questionnaires_id' => 1
            ],
            [
                'id' => 2,
                'themes_libelle' => 'Votre employeur',
                'questionnaires_id' => 1
            ],
            [
                'id' => 3,
                'themes_libelle' => 'Votre premier emploi',
                'questionnaires_id' => 1
            ],
            [
                'id' => 4,
                'themes_libelle' => 'Votre emploi actuel',
                'questionnaires_id' => 1
            ],
            [
                'id' => 5,
                'themes_libelle' => 'La formation ASI',
                'questionnaires_id' => 1
            ],
            [
                'id' => 6,
                'themes_libelle' => 'Vos compétences',
                'questionnaires_id' => 1
            ],
            [
                'id' => 7,
                'themes_libelle' => 'Votre ressentis',
                'questionnaires_id' => 1
            ],
            [
                'id' => 8,
                'themes_libelle' => 'Votre avis',
                'questionnaires_id' => 1
            ]
        ]);
    }

}
