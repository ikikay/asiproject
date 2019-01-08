<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PromosTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('promos')->insert([
            [
                'libelle' => 'L ASI',
                'nom' => 'Licence Administration de systèmes d\'information',
            ], [
                'libelle' => 'BTS SIO SLAM',
                'nom' => 'BTS Services informatiques aux organisations, solutions logicielles et applications métiers',
            ], [
                'libelle' => 'BTS SIO SISR',
                'nom' => 'BTS Services informatiques aux organisations, solutions d\'infrastructure, systèmes et réseaux',
            ]
        ]);
    }

}
