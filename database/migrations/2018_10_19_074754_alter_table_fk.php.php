<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableFk extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
//          Schema::table('TABLE', function (Blueprint $table) {
//            $table->foreign('FK')->references('id')->on('TABLE');
//        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('societe_id')->references('id')->on('societes');
        });

        Schema::table('eleves', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });

        Schema::table('professeurs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('reponses', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('question_id')->references('id')->on('questions');
        });

        Schema::table('reponses_predefinies', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions');
        });

        Schema::table('reponse_reponses_predefinie', function (Blueprint $table) {
            $table->foreign('reponse_id')->references('id')->on('reponses');
            $table->foreign('reponse_predefinie_id')->references('id')->on('reponses_predefinies');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('theme_id')->references('id')->on('themes');
        });

        Schema::table('themes', function (Blueprint $table) {
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires');
        });

        Schema::table('offres', function (Blueprint $table) {
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });

        Schema::table('contrats_offres', function (Blueprint $table) {
            $table->foreign('contrat_id')->references('id')->on('contrats');
            $table->foreign('offre_id')->references('id')->on('offres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
