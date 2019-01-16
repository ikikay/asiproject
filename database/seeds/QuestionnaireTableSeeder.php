<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionnaireTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('questionnaires')->insert([
            [
                'id' => 1,
                'questionnaires_libelle' => 'Enquête ASI sur le devenir des certifiés sortis de la formation'
            ]
        ]);
    }

}
