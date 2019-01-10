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
                'questionnaire_id' => 1
            ], [
                'ordre' => 2,
                'libelle' => 'Prénom',
                'questionnaire_id' => 1
            ], [
                'ordre' => 3,
                'libelle' => 'Date de naissance',
                'questionnaire_id' => 1
            ], [
                'ordre' => 4,
                'libelle' => 'Promotion',
                'questionnaire_id' => 1
            ], [
                'ordre' => 5,
                'libelle' => 'Boîte pendant la formation',
                'questionnaire_id' => 1
            ], [
                'ordre' => 6,
                'libelle' => 'Dénomonation Sociale [de votre Employeur]',
                'questionnaire_id' => 1
            ], [
                'ordre' => 7,
                'libelle' => 'Éffectifs de votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 8,
                'libelle' => 'Éffectifs du site sur lequel vous travaillez \n (Si votre entreprise appartient à un grand groupe)',
                'questionnaire_id' => 1
            ], [
                'ordre' => 9,
                'libelle' => 'Secteur d\'activité de votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 10,
                'libelle' => 'Activité de votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 11,
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
            ], [
                'ordre' => 12,
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'questionnaire_id' => 1
            ], [
                'ordre' => 13,
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'questionnaire_id' => 1
            ], [
                'ordre' => 14,
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'questionnaire_id' => 1
            ], [
                'ordre' => 15,
                'libelle' => 'Quel est votre salaire BRUT',
                'questionnaire_id' => 1
            ], [
                'ordre' => 16,
                'libelle' => 'Avez-vous créé votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 17,
                'libelle' => 'Depuis quand',
                'questionnaire_id' => 1
            ], [
                'ordre' => 18,
                'libelle' => 'Quel type',
                'questionnaire_id' => 1
            ], [
                'ordre' => 19,
                'libelle' => 'Etes-vous associé de votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 20,
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'questionnaire_id' => 1
            ], [
                'ordre' => 21,
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'questionnaire_id' => 1
            ], [
                'ordre' => 22,
                'libelle' => 'Une habilitation est elle nécessaire',
                'questionnaire_id' => 1
            ], [
                'ordre' => 23,
                'libelle' => 'Quel est votre niveau d"autonomie',
                'questionnaire_id' => 1
            ], [
                'ordre' => 24,
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'questionnaire_id' => 1
            ], [
                'ordre' => 25,
                'libelle' => 'Quel est votre niveau hiérarchique',
                'questionnaire_id' => 1
            ], [
                'ordre' => 26,
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'questionnaire_id' => 1
            ], [
                'ordre' => 27,
                'libelle' => 'A quel service travaillez-vous le plus',
                'questionnaire_id' => 1
            ], [
                'ordre' => 28,
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 29,
                'libelle' => 'Etes-vous en contact direct avec le client',
                'questionnaire_id' => 1
            ], [
                'ordre' => 30,
                'libelle' => 'Seul ou sous responsabilité',
                'questionnaire_id' => 1
            ], [
                'ordre' => 31,
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
            ], [
                'ordre' => 32,
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'questionnaire_id' => 1
            ], [
                'ordre' => 33,
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'questionnaire_id' => 1
            ], [
                'ordre' => 34,
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'questionnaire_id' => 1
            ], [
                'ordre' => 35,
                'libelle' => 'Quel est votre salaire BRUT',
                'questionnaire_id' => 1
            ], [
                'ordre' => 36,
                'libelle' => 'Avez-vous créé votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 37,
                'libelle' => 'Depuis quand',
                'questionnaire_id' => 1
            ], [
                'ordre' => 38,
                'libelle' => 'Quel type',
                'questionnaire_id' => 1
            ], [
                'ordre' => 39,
                'libelle' => 'Etes-vous associé de votre entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 40,
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'questionnaire_id' => 1
            ], [
                'ordre' => 41,
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'questionnaire_id' => 1
            ], [
                'ordre' => 42,
                'libelle' => 'Une habilitation est elle nécessaire',
                'questionnaire_id' => 1
            ], [
                'ordre' => 43,
                'libelle' => 'Quel est votre niveau d"autonomie',
                'questionnaire_id' => 1
            ], [
                'ordre' => 44,
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'questionnaire_id' => 1
            ], [
                'ordre' => 45,
                'libelle' => 'Quel est votre niveau hiérarchique',
                'questionnaire_id' => 1
            ], [
                'ordre' => 46,
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'questionnaire_id' => 1
            ], [
                'ordre' => 47,
                'libelle' => 'A quel service travaillez-vous le plus',
                'questionnaire_id' => 1
            ], [
                'ordre' => 48,
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'questionnaire_id' => 1
            ], [
                'ordre' => 49,
                'libelle' => 'Etes-vous en contact direct avec le client',
                'questionnaire_id' => 1
            ], [
                'ordre' => 50,
                'libelle' => 'Seul ou sous responsabilité',
                'questionnaire_id' => 1
            ], [
                'ordre' => 51,
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'questionnaire_id' => 1
            ], [
                'ordre' => 52,
                'libelle' => 'Que vous a-t-il manqué en termes de contenus ou de méthodes',
                'questionnaire_id' => 1
            ], [
                'ordre' => 53,
                'libelle' => 'Avez-vous passé d"autres certifications, homologations, ou formations',
                'questionnaire_id' => 1
            ], [
                'ordre' => 54,
                'libelle' => 'Si oui, les compétences ou connaissances acquises en ASI étaient-elles nécessaires et suffisantes',
                'questionnaire_id' => 1
            ], [
                'ordre' => 55,
                'libelle' => 'En quoi jugez-vous cette certification pertinente au vu de votre métier',
                'questionnaire_id' => 1
            ], [
                'ordre' => 56,
                'libelle' => 'En quoi cette certification ne s"integre-t-elle pas dans votre champs d"activité professionnel',
                'questionnaire_id' => 1
            ], [
                'ordre' => 57,
                'libelle' => 'Pensez-vous etre surqualifié par rapport à l"emploi que vous occupez',
                'questionnaire_id' => 1
            ], [
                'ordre' => 58,
                'libelle' => 'Sur les pages suivantes, figure le référentiel de compétences de ASI. Indiquez les compétences que vous mettez le plus souvent en oeuvre',
                'questionnaire_id' => 1
            ], [
                'ordre' => 59,
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a poussé à entrer dans la formation',
                'questionnaire_id' => 1
            ], [
                'ordre' => 60,
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a espériez en sortant de la formation',
                'questionnaire_id' => 1
            ], [
                'ordre' => 61,
                'libelle' => 'Quelle modification à apporter à la formation ASI vous semble judicieuse',
                'questionnaire_id' => 1
            ]
        ]);
    }

}
