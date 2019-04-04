<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JeuDeTestTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('reponses')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'question_id' => 1,
                'reponse' => 'Courbez'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'question_id' => 2,
                'reponse' => 'Julian'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'question_id' => 3,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'question_id' => 4,
                'reponse' => 'ASI'
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'question_id' => 5,
                'reponse' => 'Entreprise de Julian'
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'question_id' => 6,
                'reponse' => "Dénmination sociale de l'employeur de Julian"
            ],
             [
                'id' => 7,
                'user_id' => 1,
                'question_id' => 7,
                'reponse' => '10'
            ],
            [
                'id' => 8,
                'user_id' => 1,
                'question_id' => 8,
                'reponse' => '10'
            ],
            [
                'id' => 9,
                'user_id' => 1,
                'question_id' => 9,
                'reponse' => 'Informatique/Télécoms'
            ],
            [
                'id' => 10,
                'user_id' => 1,
                'question_id' => 10,
                'reponse' => "Développement d'applications pour les industries"
            ],
            [
                'id' => 11,
                'user_id' => 1,
                'question_id' => 1,
                'reponse' => '2 mois'
            ],
            [
                'id' => 12,
                'user_id' => 1,
                'question_id' => 12,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 13,
                'user_id' => 1,
                'question_id' => 13,
                'reponse' => 'CDD'
            ],
            [
                'id' => 14,
                'user_id' => 1,
                'question_id' => 14,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 15,
                'user_id' => 1,
                'question_id' => 15,
                'reponse' => '1700'
            ],
            [
                'id' => 16,
                'user_id' => 1,
                'question_id' => 16,
                'reponse' => 'Non'
            ],
            [
                'id' => 17,
                'user_id' => 1,
                'question_id' => 17,
                'reponse' => 'Jamais'
            ],
            [
                'id' => 18,
                'user_id' => 1,
                'question_id' => 18,
                'reponse' => 'Rien'
            ],
             [
                'id' => 19,
                'user_id' => 1,
                'question_id' => 19,
                'reponse' => 'Non'
            ],
            [
                'id' => 20,
                'user_id' => 1,
                'question_id' => 20,
                'reponse' => 'Développeur Informatique'
            ],
            [
                'id' => 21,
                'user_id' => 1,
                'question_id' => 21,
                'reponse' => "Développement d'applications lourdes"
            ],
            [
                'id' => 22,
                'user_id' => 1,
                'question_id' => 22,
                'reponse' => 'Non'
            ],
            [
                'id' => 23,
                'user_id' => 1,
                'question_id' => 23,
                'reponse' => 'Développement seul'
            ],
            [
                'id' => 24,
                'user_id' => 1,
                'question_id' => 24,
                'reponse' => 'Logiciel'
            ],
            [
                'id' => 25,
                'user_id' => 1,
                'question_id' => 25,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 26,
                'user_id' => 1,
                'question_id' => 26,
                'reponse' => 'Cadre'
            ],
            [
                'id' => 27,
                'user_id' => 1,
                'question_id' => 27,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 28,
                'user_id' => 1,
                'question_id' => 28,
                'reponse' => 'Au plus bas'
            ],
            [
                'id' => 29,
                'user_id' => 1,
                'question_id' => 29,
                'reponse' => 'Non'
            ],
            [
                'id' => 30,
                'user_id' => 1,
                'question_id' => 30,
                'reponse' => 'Seul'
            ],
             [
                'id' => 31,
                'user_id' => 1,
                'question_id' => 31,
                'reponse' => '2 mois'
            ],
            [
                'id' => 32,
                'user_id' => 1,
                'question_id' => 32,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 33,
                'user_id' => 1,
                'question_id' => 33,
                'reponse' => 'CDD'
            ],
            [
                'id' => 34,
                'user_id' => 1,
                'question_id' => 34,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 35,
                'user_id' => 1,
                'question_id' => 35,
                'reponse' => '1700'
            ],
            [
                'id' => 36,
                'user_id' => 1,
                'question_id' => 36,
                'reponse' => 'Non'
            ],
            [
                'id' => 37,
                'user_id' => 1,
                'question_id' => 37,
                'reponse' => 'Jamais'
            ],
            [
                'id' => 38,
                'user_id' => 1,
                'question_id' => 38,
                'reponse' => 'Rien'
            ],
            [
                'id' => 39,
                'user_id' => 1,
                'question_id' => 39,
                'reponse' => 'Non'
            ],
            [
                'id' => 40,
                'user_id' => 1,
                'question_id' => 40,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 41,
                'user_id' => 1,
                'question_id' => 41,
                'reponse' => "Développement d'applications lourdes"
            ],
            [
                'id' => 42,
                'user_id' => 1,
                'question_id' => 42,
                'reponse' => 'Non'
            ],
             [
                'id' => 43,
                'user_id' => 1,
                'question_id' => 43,
                'reponse' => 'Seul'
            ],
            [
                'id' => 44,
                'user_id' => 1,
                'question_id' => 44,
                'reponse' => 'Logiciel'
            ],
            [
                'id' => 45,
                'user_id' => 1,
                'question_id' => 45,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 46,
                'user_id' => 1,
                'question_id' => 46,
                'reponse' => 'Cadre'
            ],
            [
                'id' => 47,
                'user_id' => 1,
                'question_id' => 47,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 48,
                'user_id' => 1,
                'question_id' => 48,
                'reponse' => 'Le plus bas'
            ],
            [
                'id' => 49,
                'user_id' => 1,
                'question_id' => 49,
                'reponse' => 'Non'
            ],
            [
                'id' => 50,
                'user_id' => 1,
                'question_id' => 50,
                'reponse' => 'Seul'
            ],
            [
                'id' => 51,
                'user_id' => 1,
                'question_id' => 51,
                'reponse' => '2 mois'
            ],
            [
                'id' => 52,
                'user_id' => 1,
                'question_id' => 52,
                'reponse' => "Migration d'applications sur serveurs"
            ],
            [
                'id' => 53,
                'user_id' => 1,
                'question_id' => 53,
                'reponse' => 'Non'
            ],
            [
                'id' => 54,
                'user_id' => 1,
                'question_id' => 54,
                'reponse' => 'Non'
            ],
             [
                'id' => 55,
                'user_id' => 1,
                'question_id' => 55,
                'reponse' => "Au niveau du développement et de l'alternance"
            ],
            [
                'id' => 56,
                'user_id' => 1,
                'question_id' => 56,
                'reponse' => 'Gestion de projet'
            ],
            [
                'id' => 57,
                'user_id' => 1,
                'question_id' => 57,
                'reponse' => 'Non'
            ],
            [
                'id' => 58,
                'user_id' => 1,
                'question_id' => 58,
                'reponse' => 'Travail en autonomie'
            ],
            [
                'id' => 59,
                'user_id' => 1,
                'question_id' => 59,
                'reponse' => 'Oui'
            ],
            [
                'id' => 60,
                'user_id' => 1,
                'question_id' => 60,
                'reponse' => 'Oui'
            ],
            [
                'id' => 61,
                'user_id' => 1,
                'question_id' => 61,
                'reponse' => 'Aucune'
            ],
            [
                'id' => 62,
                'user_id' => 2,
                'question_id' => 1,
                'reponse' => 'Courbez'
            ],
            [
                'id' => 63,
                'user_id' => 2,
                'question_id' => 2,
                'reponse' => 'Julian'
            ],
            [
                'id' => 64,
                'user_id' => 2,
                'question_id' => 3,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 65,
                'user_id' => 2,
                'question_id' => 4,
                'reponse' => 'ASI'
            ],
            [
                'id' => 66,
                'user_id' => 2,
                'question_id' => 5,
                'reponse' => 'Entreprise de Julian'
            ],
            [
                'id' => 67,
                'user_id' => 2,
                'question_id' => 6,
                'reponse' => "Dénmination sociale de l'employeur de Julian"
            ],
             [
                'id' => 68,
                'user_id' => 2,
                'question_id' => 7,
                'reponse' => '10'
            ],
            [
                'id' => 69,
                'user_id' => 2,
                'question_id' => 8,
                'reponse' => '10'
            ],
            [
                'id' => 70,
                'user_id' => 2,
                'question_id' => 9,
                'reponse' => 'Informatique/Télécoms'
            ],
            [
                'id' => 71,
                'user_id' => 2,
                'question_id' => 10,
                'reponse' => "Développement d'applications pour les industries"
            ],
            [
                'id' => 72,
                'user_id' => 2,
                'question_id' => 1,
                'reponse' => '2 mois'
            ],
            [
                'id' => 73,
                'user_id' => 2,
                'question_id' => 12,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 74,
                'user_id' => 2,
                'question_id' => 13,
                'reponse' => 'CDD'
            ],
            [
                'id' => 75,
                'user_id' => 2,
                'question_id' => 14,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 76,
                'user_id' => 2,
                'question_id' => 15,
                'reponse' => '1700'
            ],
            [
                'id' => 77,
                'user_id' => 2,
                'question_id' => 16,
                'reponse' => 'Non'
            ],
            [
                'id' => 78,
                'user_id' => 2,
                'question_id' => 17,
                'reponse' => 'Jamais'
            ],
            [
                'id' => 79,
                'user_id' => 2,
                'question_id' => 18,
                'reponse' => 'Rien'
            ],
             [
                'id' => 80,
                'user_id' => 2,
                'question_id' => 19,
                'reponse' => 'Non'
            ],
            [
                'id' => 81,
                'user_id' => 2,
                'question_id' => 20,
                'reponse' => 'Développeur Informatique'
            ],
            [
                'id' => 82,
                'user_id' => 2,
                'question_id' => 21,
                'reponse' => "Développement d'applications lourdes"
            ],
            [
                'id' => 83,
                'user_id' => 2,
                'question_id' => 22,
                'reponse' => 'Non'
            ],
            [
                'id' => 84,
                'user_id' => 2,
                'question_id' => 23,
                'reponse' => 'Développement seul'
            ],
            [
                'id' => 85,
                'user_id' => 2,
                'question_id' => 24,
                'reponse' => 'Logiciel'
            ],
            [
                'id' => 86,
                'user_id' => 2,
                'question_id' => 25,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 87,
                'user_id' => 2,
                'question_id' => 26,
                'reponse' => 'Cadre'
            ],
            [
                'id' => 88,
                'user_id' => 2,
                'question_id' => 27,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 89,
                'user_id' => 2,
                'question_id' => 28,
                'reponse' => 'Au plus bas'
            ],
            [
                'id' => 90,
                'user_id' => 2,
                'question_id' => 29,
                'reponse' => 'Non'
            ],
            [
                'id' => 91,
                'user_id' => 2,
                'question_id' => 30,
                'reponse' => 'Seul'
            ],
             [
                'id' => 92,
                'user_id' => 2,
                'question_id' => 31,
                'reponse' => '2 mois'
            ],
            [
                'id' => 93,
                'user_id' => 2,
                'question_id' => 32,
                'reponse' => '06/10/2013'
            ],
            [
                'id' => 94,
                'user_id' => 2,
                'question_id' => 33,
                'reponse' => 'CDD'
            ],
            [
                'id' => 95,
                'user_id' => 2,
                'question_id' => 34,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 96,
                'user_id' => 2,
                'question_id' => 35,
                'reponse' => '1700'
            ],
            [
                'id' => 97,
                'user_id' => 2,
                'question_id' => 36,
                'reponse' => 'Non'
            ],
            [
                'id' => 98,
                'user_id' => 2,
                'question_id' => 37,
                'reponse' => 'Jamais'
            ],
            [
                'id' => 99,
                'user_id' => 2,
                'question_id' => 38,
                'reponse' => 'Rien'
            ],
            [
                'id' => 100,
                'user_id' => 2,
                'question_id' => 39,
                'reponse' => 'Non'
            ],
            [
                'id' => 101,
                'user_id' => 2,
                'question_id' => 40,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 102,
                'user_id' => 2,
                'question_id' => 41,
                'reponse' => "Développement d'applications lourdes"
            ],
            [
                'id' => 103,
                'user_id' => 2,
                'question_id' => 42,
                'reponse' => 'Non'
            ],
             [
                'id' => 104,
                'user_id' => 2,
                'question_id' => 43,
                'reponse' => 'Seul'
            ],
            [
                'id' => 105,
                'user_id' => 2,
                'question_id' => 44,
                'reponse' => 'Logiciel'
            ],
            [
                'id' => 106,
                'user_id' => 2,
                'question_id' => 45,
                'reponse' => 'Technicien'
            ],
            [
                'id' => 107,
                'user_id' => 2,
                'question_id' => 46,
                'reponse' => 'Cadre'
            ],
            [
                'id' => 108,
                'user_id' => 2,
                'question_id' => 47,
                'reponse' => 'Service informatique'
            ],
            [
                'id' => 109,
                'user_id' => 2,
                'question_id' => 48,
                'reponse' => 'Le plus bas'
            ],
            [
                'id' => 110,
                'user_id' => 2,
                'question_id' => 49,
                'reponse' => 'Non'
            ],
            [
                'id' => 111,
                'user_id' => 2,
                'question_id' => 50,
                'reponse' => 'Seul'
            ],
            [
                'id' => 112,
                'user_id' => 2,
                'question_id' => 51,
                'reponse' => '2 mois'
            ],
            [
                'id' => 113,
                'user_id' => 2,
                'question_id' => 52,
                'reponse' => "Migration d'applications sur serveurs"
            ],
            [
                'id' => 114,
                'user_id' => 2,
                'question_id' => 53,
                'reponse' => 'Non'
            ],
            [
                'id' => 115,
                'user_id' => 2,
                'question_id' => 54,
                'reponse' => 'Non'
            ],
             [
                'id' => 116,
                'user_id' => 2,
                'question_id' => 55,
                'reponse' => "Au niveau du développement et de l'alternance"
            ],
            [
                'id' => 117,
                'user_id' => 2,
                'question_id' => 56,
                'reponse' => 'Gestion de projet'
            ],
            [
                'id' => 118,
                'user_id' => 2,
                'question_id' => 57,
                'reponse' => 'Non'
            ],
            [
                'id' => 119,
                'user_id' => 2,
                'question_id' => 58,
                'reponse' => 'Travail en autonomie'
            ],
            [
                'id' => 120,
                'user_id' => 2,
                'question_id' => 59,
                'reponse' => 'Oui'
            ],
            [
                'id' => 121,
                'user_id' => 2,
                'question_id' => 60,
                'reponse' => 'Oui'
            ],
            [
                'id' => 122,
                'user_id' => 2,
                'question_id' => 61,
                'reponse' => 'Aucune'
            ]
        ]);
        
        DB::table('reponse_reponses_predefinie')->insert([
            [
                'id' => 1,
                'reponse_id' => 9,
                'reponse_predefinie_id' => 15,
            ],
            [
                'id' => 2,
                'reponse_id' => 13,
                'reponse_predefinie_id' => 24,
            ],
            [
                'id' => 3,
                'reponse_id' => 14,
                'reponse_predefinie_id' => 28,
            ],
            [
                'id' => 4,
                'reponse_id' => 16,
                'reponse_predefinie_id' => 33,
            ],
            [
                'id' => 5,
                'reponse_id' => 18,
                'reponse_predefinie_id' => 39,
            ],
            [
                'id' => 6,
                'reponse_id' => 19,
                'reponse_predefinie_id' => 41,
            ],
            [
                'id' => 7,
                'reponse_id' => 22,
                'reponse_predefinie_id' => 43,
            ],
            [
                'id' => 8,
                'reponse_id' => 29,
                'reponse_predefinie_id' => 45,
            ],
            [
                'id' => 9,
                'reponse_id' => 30,
                'reponse_predefinie_id' => 46,
            ],
            [
                'id' => 10,
                'reponse_id' => 33,
                'reponse_predefinie_id' => 49,
            ],
            [
                'id' => 11,
                'reponse_id' => 34,
                'reponse_predefinie_id' => 53,
            ],
            [
                'id' => 12,
                'reponse_id' => 36,
                'reponse_predefinie_id' => 58,
            ],
            [
                'id' => 13,
                'reponse_id' => 38,
                'reponse_predefinie_id' => 64,
            ],
            [
                'id' => 14,
                'reponse_id' => 39,
                'reponse_predefinie_id' => 66,
            ],
            [
                'id' => 15,
                'reponse_id' => 42,
                'reponse_predefinie_id' => 68,
            ],
            [
                'id' => 16,
                'reponse_id' => 49,
                'reponse_predefinie_id' => 70,
            ],
            [
                'id' => 17,
                'reponse_id' => 50,
                'reponse_predefinie_id' => 71,
            ],
            [
                'id' => 18,
                'reponse_id' => 53,
                'reponse_predefinie_id' => 75,
            ],
            [
                'id' => 19,
                'reponse_id' => 57,
                'reponse_predefinie_id' => 78,
            ],
            [
                'id' => 20,
                'reponse_id' => 59,
                'reponse_predefinie_id' => 79,
            ],
            [
                'id' => 21,
                'reponse_id' => 60,
                'reponse_predefinie_id' => 81,
            ],
            [
                'id' => 22,
                'reponse_id' => 9,
                'reponse_predefinie_id' => 15,
            ],
            [
                'id' => 23,
                'reponse_id' => 13,
                'reponse_predefinie_id' => 24,
            ],
            [
                'id' => 24,
                'reponse_id' => 14,
                'reponse_predefinie_id' => 28,
            ],
            [
                'id' => 25,
                'reponse_id' => 16,
                'reponse_predefinie_id' => 33,
            ],
            [
                'id' => 26,
                'reponse_id' => 18,
                'reponse_predefinie_id' => 39,
            ],
            [
                'id' => 27,
                'reponse_id' => 19,
                'reponse_predefinie_id' => 41,
            ],
            [
                'id' => 28,
                'reponse_id' => 22,
                'reponse_predefinie_id' => 43,
            ],
            [
                'id' => 29,
                'reponse_id' => 29,
                'reponse_predefinie_id' => 45,
            ],
            [
                'id' => 30,
                'reponse_id' => 30,
                'reponse_predefinie_id' => 46,
            ],
            [
                'id' => 31,
                'reponse_id' => 33,
                'reponse_predefinie_id' => 49,
            ],
            [
                'id' => 32,
                'reponse_id' => 34,
                'reponse_predefinie_id' => 53,
            ],
            [
                'id' => 33,
                'reponse_id' => 36,
                'reponse_predefinie_id' => 58,
            ],
            [
                'id' => 34,
                'reponse_id' => 38,
                'reponse_predefinie_id' => 64,
            ],
            [
                'id' => 35,
                'reponse_id' => 39,
                'reponse_predefinie_id' => 66,
            ],
            [
                'id' => 36,
                'reponse_id' => 42,
                'reponse_predefinie_id' => 68,
            ],
            [
                'id' => 37,
                'reponse_id' => 49,
                'reponse_predefinie_id' => 70,
            ],
            [
                'id' => 38,
                'reponse_id' => 50,
                'reponse_predefinie_id' => 71,
            ],
            [
                'id' => 39,
                'reponse_id' => 53,
                'reponse_predefinie_id' => 75,
            ],
            [
                'id' => 40,
                'reponse_id' => 57,
                'reponse_predefinie_id' => 78,
            ],
            [
                'id' => 41,
                'reponse_id' => 59,
                'reponse_predefinie_id' => 79,
            ],
            [
                'id' => 42,
                'reponse_id' => 60,
                'reponse_predefinie_id' => 81,
            ]
        ]);
    }

}
