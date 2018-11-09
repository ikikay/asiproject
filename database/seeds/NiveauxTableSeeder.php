<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NiveauxTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('niveaux')->insert([
                [
                'libelle' => "Aucun"
            ], [
                'libelle' => "5"
            ], [
                'libelle' => "4"
            ], [
                'libelle' => "3"
            ], [
                'libelle' => "2"
            ], [
                'libelle' => "1"
            ], [
                'libelle' => "Autres"
            ]
        ]);
    }

}