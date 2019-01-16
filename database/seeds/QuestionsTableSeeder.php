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
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 1
            ], [
                'ordre' => 12,
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'themes_id' => 1
            ], [
                'ordre' => 13,
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'themes_id' => 1
            ], [
                'ordre' => 14,
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'themes_id' => 1
            ], [
                'ordre' => 15,
                'libelle' => 'Quel est votre salaire BRUT',
                'themes_id' => 1
            ], [
                'ordre' => 16,
                'libelle' => 'Avez-vous créé votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 17,
                'libelle' => 'Depuis quand',
                'themes_id' => 1
            ], [
                'ordre' => 18,
                'libelle' => 'Quel type',
                'themes_id' => 1
            ], [
                'ordre' => 19,
                'libelle' => 'Etes-vous associé de votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 20,
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'themes_id' => 1
            ], [
                'ordre' => 21,
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'themes_id' => 1
            ], [
                'ordre' => 22,
                'libelle' => 'Une habilitation est elle nécessaire',
                'themes_id' => 1
            ], [
                'ordre' => 23,
                'libelle' => 'Quel est votre niveau d"autonomie',
                'themes_id' => 1
            ], [
                'ordre' => 24,
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'themes_id' => 1
            ], [
                'ordre' => 25,
                'libelle' => 'Quel est votre niveau hiérarchique',
                'themes_id' => 1
            ], [
                'ordre' => 26,
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'themes_id' => 1
            ], [
                'ordre' => 27,
                'libelle' => 'A quel service travaillez-vous le plus',
                'themes_id' => 1
            ], [
                'ordre' => 28,
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 29,
                'libelle' => 'Etes-vous en contact direct avec le client',
                'themes_id' => 1
            ], [
                'ordre' => 30,
                'libelle' => 'Seul ou sous responsabilité',
                'themes_id' => 1
            ], [
                'ordre' => 31,
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 1
            ], [
                'ordre' => 32,
                'libelle' => 'A quelle date avez-vous eu votre premier emploi',
                'themes_id' => 1
            ], [
                'ordre' => 33,
                'libelle' => 'sous quel type de contrat (CDI, CDD,...)',
                'themes_id' => 1
            ], [
                'ordre' => 34,
                'libelle' => 'Quel est votre statut (Cadre, agent de maitrise, ...)',
                'themes_id' => 1
            ], [
                'ordre' => 35,
                'libelle' => 'Quel est votre salaire BRUT',
                'themes_id' => 1
            ], [
                'ordre' => 36,
                'libelle' => 'Avez-vous créé votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 37,
                'libelle' => 'Depuis quand',
                'themes_id' => 1
            ], [
                'ordre' => 38,
                'libelle' => 'Quel type',
                'themes_id' => 1
            ], [
                'ordre' => 39,
                'libelle' => 'Etes-vous associé de votre entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 40,
                'libelle' => 'Quelle est la designation de votre métier / de votre formations',
                'themes_id' => 1
            ], [
                'ordre' => 41,
                'libelle' => 'Quelle sont vos activités les plus fréquentes',
                'themes_id' => 1
            ], [
                'ordre' => 42,
                'libelle' => 'Une habilitation est elle nécessaire',
                'themes_id' => 1
            ], [
                'ordre' => 43,
                'libelle' => 'Quel est votre niveau d"autonomie',
                'themes_id' => 1
            ], [
                'ordre' => 44,
                'libelle' => 'Quelles sont la nature de vos responsabilités',
                'themes_id' => 1
            ], [
                'ordre' => 45,
                'libelle' => 'Quel est votre niveau hiérarchique',
                'themes_id' => 1
            ], [
                'ordre' => 46,
                'libelle' => 'Quelle est la fonction de votre supérieur hiérarchique',
                'themes_id' => 1
            ], [
                'ordre' => 47,
                'libelle' => 'A quel service travaillez-vous le plus',
                'themes_id' => 1
            ], [
                'ordre' => 48,
                'libelle' => 'Ou vous situez-vous dans l"organigramme de l"entreprise',
                'themes_id' => 1
            ], [
                'ordre' => 49,
                'libelle' => 'Etes-vous en contact direct avec le client',
                'themes_id' => 1
            ], [
                'ordre' => 50,
                'libelle' => 'Seul ou sous responsabilité',
                'themes_id' => 1
            ], [
                'ordre' => 51,
                'libelle' => 'Combien de temps à duré la période de recherche de votre premier emploi',
                'themes_id' => 1
            ], [
                'ordre' => 52,
                'libelle' => 'Que vous a-t-il manqué en termes de contenus ou de méthodes',
                'themes_id' => 1
            ], [
                'ordre' => 53,
                'libelle' => 'Avez-vous passé d"autres certifications, homologations, ou formations',
                'themes_id' => 1
            ], [
                'ordre' => 54,
                'libelle' => 'Si oui, les compétences ou connaissances acquises en ASI étaient-elles nécessaires et suffisantes',
                'themes_id' => 1
            ], [
                'ordre' => 55,
                'libelle' => 'En quoi jugez-vous cette certification pertinente au vu de votre métier',
                'themes_id' => 1
            ], [
                'ordre' => 56,
                'libelle' => 'En quoi cette certification ne s"integre-t-elle pas dans votre champs d"activité professionnel',
                'themes_id' => 1
            ], [
                'ordre' => 57,
                'libelle' => 'Pensez-vous etre surqualifié par rapport à l"emploi que vous occupez',
                'themes_id' => 1
            ], [
                'ordre' => 58,
                'libelle' => 'Sur les pages suivantes, figure le référentiel de compétences de ASI. Indiquez les compétences que vous mettez le plus souvent en oeuvre',
                'themes_id' => 1
            ], [
                'ordre' => 59,
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a poussé à entrer dans la formation',
                'themes_id' => 1
            ], [
                'ordre' => 60,
                'libelle' => 'Pensez-vous exercer un métier conforme à ce qui vous a espériez en sortant de la formation',
                'themes_id' => 1
            ], [
                'ordre' => 61,
                'libelle' => 'Quelle modification à apporter à la formation ASI vous semble judicieuse',
                'themes_id' => 1
            ]
        ]);
    }

}
