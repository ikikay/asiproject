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
            $table->foreign('societe_id')->references('id')->on('societe');
        });

        Schema::table('eleves', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('contact_id')->references('id')->on('contact');
        });

        Schema::table('professeurs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
        });

        Schema::table('reponses', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('question_id')->references('id')->on('question');
        });

        Schema::table('reponses_predefinies', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('question');
        });

        Schema::table('reponse_reponses_predefinie', function (Blueprint $table) {
            $table->foreign('reponse_id')->references('id')->on('reponse');
            $table->foreign('reponse_predefinie_id')->references('id')->on('reponse_predefinie');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('themes_id')->references('id')->on('themes');
        });

        Schema::table('themes', function (Blueprint $table) {
            $table->foreign('questionnaire_id')->references('id')->on('questionnaire');
        });

        Schema::table('offres', function (Blueprint $table) {
            $table->foreign('niveau_id')->references('id')->on('niveau');
            $table->foreign('contact_id')->references('id')->on('contact');
        });

        Schema::table('contrats_offres', function (Blueprint $table) {
            $table->foreign('contrat_id')->references('id')->on('contrat');
            $table->foreign('offre_id')->references('id')->on('offre');
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
