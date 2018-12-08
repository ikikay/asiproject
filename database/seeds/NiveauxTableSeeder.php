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
                'libelle' => "Niveau 5 (CAP, BEP)"
            ], [
                'libelle' => "Niveau 4 (Baccalauréat)"
            ], [
                'libelle' => "Niveau 3 (DEUG, BTS, DUT, DEUST)"
            ], [
                'libelle' => "Niveau 2 (Licence, licence professionnelle | Maîtrise, master 1)"
            ], [
                'libelle' => "Niveau 1 (Master, Doctorat, Ingénieur ...)"
            ], [
                'libelle' => "Autres"
            ]
        ]);
    }

}