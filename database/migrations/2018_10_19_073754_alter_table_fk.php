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
//            $table->foreign('FK')->references('id')->on('TABLE')->onDelete('cascade');
//        });
        Schema::table('eleves', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('eleves', function (Blueprint $table) {
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('societe_id')->references('id')->on('societes')->onDelete('cascade');
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');
        });
        Schema::table('professeurs', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('reponse_id')->references('id')->on('reponses')->onDelete('cascade');
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->onDelete('cascade');
        });
        Schema::table('offres', function (Blueprint $table) {
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
        Schema::table('reponses_predefinies', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
        Schema::table('contrats_offres', function (Blueprint $table) {
            $table->foreign('contrat_id')->references('id')->on('contrats')->onDelete('cascade');
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
        });

        Schema::table('categories_questionnaires', function (Blueprint $table) {
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('questionnaire_id')->references('id')->on('questionnaires')->onDelete('cascade');
        });
        Schema::table('reponses_reponses_predefinies', function (Blueprint $table) {
            $table->foreign('reponse_id')->references('id')->on('reponses')->onDelete('cascade');
            $table->foreign('reponse_predefinie_id')->references('id')->on('reponses_predefinies')->onDelete('cascade');
        });

        Schema::table('reponses', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
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
