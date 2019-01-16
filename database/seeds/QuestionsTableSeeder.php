<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('questions')->insert([
            [
                'ordre' => 1,
                'libelle' => 'Nom',
                'themes_id' => 1
            ], [
                'ordre' => 2,
                'libelle' => 'Prénom',
                'themes_id' => 1
            ], [
                'ordre' => 3,
                'libelle' => 'Date de naissance',
                'themes_id' => 1
            ], [
                'ordre' => 4,
                'libelle' => 'Promotion',
                'themes_id' => 1
            ], [
                'ordre' => 5,
                'libelle' => 'Boîte pendant la formation',
                'themes_id' => 1
            ], [
                'ordre' => 6,
                'libelle' => 'Dénomonation Sociale [de votre Employeur]',
                'themes_id' => 1
            ], [
                'ordre' => 7,
                'libelle' => 'Éffectifs de votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 8,
                'libelle' => 'Éffectifs du site sur lequel vous travaillez \n (Si votre entreprise appartient à un grand groupe)',
                'themes_id' => 1
            ], [
                'ordre' => 9,
                'libelle' => 'Secteur d\'activité de votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 10,
                'libelle' => 'Activité de votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 11,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 12,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 13,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 14,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 15,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 16,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 17,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 18,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 19,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 20,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 21,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 22,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 23,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 24,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 25,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 26,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 27,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 28,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 29,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 30,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 31,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 32,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 33,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 34,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 35,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 36,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 37,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 38,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 39,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 40,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 41,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 42,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 43,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 44,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 45,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 46,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 47,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 48,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 49,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 50,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 51,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 52,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 53,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 54,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 55,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 56,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 57,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 58,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 59,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 60,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 61,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 61,
                'libelle' => '',
                'themes_id' => 1
            ], [
                'ordre' => 61,
                'libelle' => '',
                'themes_id' => 1
            ]
        ]);
    }

}
