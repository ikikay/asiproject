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
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 12,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 13,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 14,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 15,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre salaire BRUT',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 16,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Avez-vous créé votre entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 17,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Depuis quand',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 18,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel type',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 19,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Etes-vous associé de votre entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 20,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 21,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 22,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Une habilitation est elle nécessaire',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 23,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre niveau d"autonomie',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 24,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 25,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre niveau hiérarchique',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 26,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 27,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'A quel service travaillez-vous le plus',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 28,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 29,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Etes-vous en contact direct avec le client',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 30,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Seul ou sous responsabilité',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 31,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 32,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 33,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 34,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 35,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre salaire BRUT',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 36,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Avez-vous créé votre entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 37,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Depuis quand',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 38,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel type',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 39,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Etes-vous associé de votre entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 40,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 41,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 42,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Une habilitation est elle nécessaire',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 43,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre niveau d"autonomie',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 44,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 45,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quel est votre niveau hiérarchique',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 46,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 47,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'A quel service travaillez-vous le plus',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 48,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 49,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Etes-vous en contact direct avec le client',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 50,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Seul ou sous responsabilité',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 51,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 52,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Que vous a-t-il manqué en termes de contenus ou de méthodes',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 53,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Avez-vous passé d"autres certifications, homologations, ou formations',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 54,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Si oui, les compétences ou connaissances acquises en ASI étaient-elles nécessaires et suffisantes',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 55,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'En quoi jugez-vous cette certification pertinente au vu de votre métier',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 56,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'En quoi cette certification ne s"integre-t-elle pas dans votre champs d"activité professionnel',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 57,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Pensez-vous etre surqualifié par rapport à l"emploi que vous occupez',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 58,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Sur les pages suivantes, figure le référentiel de compétences de ASI. Indiquez les compétences que vous mettez le plus souvent en oeuvre',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 59,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a poussé à entrer dans la formation',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 60,
<<<<<<< HEAD
                'libelle' => '',
                'themes_id' => 1
=======
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a espériez en sortant de la formation',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ], [
                'ordre' => 61,
<<<<<<< HEAD
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
=======
                'libelle' => 'Quelle modification à apporter à la formation ASI vous semble judicieuse',
                'questionnaire_id' => 1
>>>>>>> origin/master
            ]
        ]);
    }

}
