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
                'questions_ordre' => 1,
                'questions_libelle' => 'Nom',
                'themes_id' => 1
            ], [
                'questions_ordre' => 2,
                'questions_libelle' => 'Prénom',
                'themes_id' => 1
            ], [
                'questions_ordre' => 3,
                'questions_libelle' => 'Date de naissance',
                'themes_id' => 1
            ], [
                'questions_ordre' => 4,
                'questions_libelle' => 'Promotion',
                'themes_id' => 1
            ], [
                'questions_ordre' => 5,
                'questions_libelle' => 'Boîte pendant la formation',
                'themes_id' => 1
            ], [
                'questions_ordre' => 6,
                'questions_libelle' => 'Dénomonation Sociale [de votre Employeur]',
                'themes_id' => 2
            ], [
                'questions_ordre' => 7,
                'questions_libelle' => 'Éffectifs de votre entreprise',
                'themes_id' => 2
            ], [
                'questions_ordre' => 8,
                'questions_libelle' => 'Éffectifs du site sur lequel vous travaillez \n (Si votre entreprise appartient à un grand groupe)',
                'themes_id' => 2
            ], [
                'questions_ordre' => 9,
                'questions_libelle' => 'Secteur d\'activité de votre entreprise',
                'themes_id' => 2
            ], [
                'questions_ordre' => 10,
                'questions_libelle' => 'Activité de votre entreprise',
                'themes_id' => 2
            ], [
                'questions_ordre' => 11,
                'questions_libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 3
            ], [
                'questions_ordre' => 12,
                'questions_libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'themes_id' => 3
            ], [
                'questions_ordre' => 13,
                'questions_libelle' => 'Sous quel type de contrat (CDI, CDD,...)',
                'themes_id' => 3
            ], [
                'questions_ordre' => 14,
                'questions_libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'themes_id' => 3
            ], [
                'questions_ordre' => 15,
                'questions_libelle' => 'Quel est votre salaire BRUT',
                'themes_id' => 3
            ], [
                'questions_ordre' => 16,
                'questions_libelle' => 'Avez-vous créé votre entreprise',
                'themes_id' => 3
            ], [
                'questions_ordre' => 17,
                'questions_libelle' => 'Depuis quand',
                'themes_id' => 3
            ], [
                'questions_ordre' => 18,
                'questions_libelle' => 'Quel type',
                'themes_id' => 3
            ], [
                'questions_ordre' => 19,
                'questions_libelle' => 'Etes-vous associé de votre entreprise',
                'themes_id' => 3
            ], [
                'questions_ordre' => 20,
                'questions_libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'themes_id' => 3
            ], [
                'questions_ordre' => 21,
                'questions_libelle' => 'Quelle sont vos activités les plus fréquentes',
                'themes_id' => 3
            ], [
                'questions_ordre' => 22,
                'questions_libelle' => 'Une habilitation est elle nécessaire',
                'themes_id' => 3
            ], [
                'questions_ordre' => 23,
                'questions_libelle' => 'Quel est votre niveau d"autonomie',
                'themes_id' => 3
            ], [
                'questions_ordre' => 24,
                'questions_libelle' => 'Quelles sont la nature de vos responsabilités',
                'themes_id' => 3
            ], [
                'questions_ordre' => 25,
                'questions_libelle' => 'Quel est votre niveau hiérarchique',
                'themes_id' => 3
            ], [
                'questions_ordre' => 26,
                'questions_libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'themes_id' => 3
            ], [
                'questions_ordre' => 27,
                'questions_libelle' => 'A quel service travaillez-vous le plus',
                'themes_id' => 3
            ], [
                'questions_ordre' => 28,
                'questions_libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'themes_id' => 3
            ], [
                'questions_ordre' => 29,
                'questions_libelle' => 'Etes-vous en contact direct avec le client',
                'themes_id' => 3
            ], [
                'questions_ordre' => 30,
                'questions_libelle' => 'Seul ou sous responsabilité',
                'themes_id' => 3
            ], [
                'questions_ordre' => 31,
                'questions_libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 4
            ], [
                'questions_ordre' => 32,
                'questions_libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'themes_id' => 4
            ], [
                'questions_ordre' => 33,
                'questions_libelle' => 'Sous quel type de contrat (CDI, CDD,...)',
                'themes_id' => 4
            ], [
                'questions_ordre' => 34,
                'questions_libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'themes_id' => 4
            ], [
                'questions_ordre' => 35,
                'questions_libelle' => 'Quel est votre salaire BRUT',
                'themes_id' => 4
            ], [
                'questions_ordre' => 36,
                'questions_libelle' => 'Avez-vous créé votre entreprise',
                'themes_id' => 4
            ], [
                'questions_ordre' => 37,
                'questions_libelle' => 'Depuis quand',
                'themes_id' => 4
            ], [
                'questions_ordre' => 38,
                'questions_libelle' => 'Quel type',
                'themes_id' => 4
            ], [
                'questions_ordre' => 39,
                'questions_libelle' => 'Etes-vous associé de votre entreprise',
                'themes_id' => 4
            ], [
                'questions_ordre' => 40,
                'questions_libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'themes_id' => 4
            ], [
                'questions_ordre' => 41,
                'questions_libelle' => 'Quelle sont vos activités les plus fréquentes',
                'themes_id' => 4
            ], [
                'questions_ordre' => 42,
                'questions_libelle' => 'Une habilitation est elle nécessaire',
                'themes_id' => 4
            ], [
                'questions_ordre' => 43,
                'questions_libelle' => 'Quel est votre niveau d"autonomie',
                'themes_id' => 4
            ], [
                'questions_ordre' => 44,
                'questions_libelle' => 'Quelles sont la nature de vos responsabilités',
                'themes_id' => 4
            ], [
                'questions_ordre' => 45,
                'questions_libelle' => 'Quel est votre niveau hiérarchique',
                'themes_id' => 4
            ], [
                'questions_ordre' => 46,
                'questions_libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'themes_id' => 4
            ], [
                'questions_ordre' => 47,
                'questions_libelle' => 'A quel service travaillez-vous le plus',
                'themes_id' => 4
            ], [
                'questions_ordre' => 48,
                'questions_libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'themes_id' => 4
            ], [
                'questions_ordre' => 49,
                'questions_libelle' => 'Etes-vous en contact direct avec le client',
                'themes_id' => 4
            ], [
                'questions_ordre' => 50,
                'questions_libelle' => 'Seul ou sous responsabilité',
                'themes_id' => 4
            ], [
                'questions_ordre' => 51,
                'questions_libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 5
            ], [
                'questions_ordre' => 52,
                'questions_libelle' => 'Que vous a-t-il manqué en termes de contenus ou de méthodes',
                'themes_id' => 5
            ], [
                'questions_ordre' => 53,
                'questions_libelle' => 'Avez-vous passé d"autres certifications, homologations, ou formations',
                'themes_id' => 5
            ], [
                'questions_ordre' => 54,
                'questions_libelle' => 'Si oui, les compétences ou connaissances acquises en ASI étaient-elles nécessaires et suffisantes',
                'themes_id' => 5
            ], [
                'questions_ordre' => 55,
                'questions_libelle' => 'En quoi jugez-vous cette certification pertinente au vu de votre métier',
                'themes_id' => 5
            ], [
                'questions_ordre' => 56,
                'questions_libelle' => 'En quoi cette certification ne s"integre-t-elle pas dans votre champs d"activité professionnel',
                'themes_id' => 5
            ], [
                'questions_ordre' => 57,
                'questions_libelle' => 'Pensez-vous etre surqualifié par rapport à l"emploi que vous occupez',
                'themes_id' => 5
            ], [
                'questions_ordre' => 58,
                'questions_libelle' => 'Sur les pages suivantes, figure le référentiel de compétences de ASI. Indiquez les compétences que vous mettez le plus souvent en oeuvre',
                'themes_id' => 6
            ], [
                'questions_ordre' => 59,
                'questions_libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a poussé à entrer dans la formation',
                'themes_id' => 7
            ], [
                'questions_ordre' => 60,
                'questions_libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a espériez en sortant de la formation',
                'themes_id' => 7
            ], [
                'questions_ordre' => 61,
                'questions_libelle' => 'Quelle modification à apporter à la formation ASI vous semble judicieuse',
                'themes_id' => 8
            ]
        ]);
    }

}
