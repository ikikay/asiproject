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
                'niveaux_libelle' => "Aucun"
            ], [
                'niveaux_libelle' => "Niveau 5 (CAP, BEP)"
            ], [
                'niveaux_libelle' => "Niveau 4 (Baccalauréat)"
            ], [
                'niveaux_libelle' => "Niveau 3 (DEUG, BTS, DUT, DEUST)"
            ], [
                'niveaux_libelle' => "Niveau 2 (Licence, licence professionnelle | Maîtrise, master 1)"
            ], [
                'niveaux_libelle' => "Niveau 1 (Master, Doctorat, Ingénieur ...)"
            ], [
                'niveaux_libelle' => "Autres"
            ]
        ]);
    }

}