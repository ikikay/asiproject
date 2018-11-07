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
                'libelle' => "CDD"
            ], [
                'libelle' => "CDI"
            ], [
                'libelle' => "Interim"
            ], [
                'name' => "Alternance"
            ], [
                'name' => "Autres"
            ]
        ]);
    }

}