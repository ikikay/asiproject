<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('contrats')->insert([
                [
                'contrats_libelle' => "CDD"
            ], [
                'contrats_libelle' => "CDI"
            ], [
                'contrats_libelle' => "Interim"
            ], [
                'contrats_libelle' => "Alternance"
            ], [
                'contrats_libelle' => "Autres"
            ]
        ]);
    }

}