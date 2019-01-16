<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesPredefiniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reponses_predefinies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();

            $table->integer('reponses_predefinies_ordre');
            $table->string('reponses_predefinies_libelle');
            $table->boolean('reponses_predefinies_is_radio');
            $table->boolean('reponses_predefinies_is_checkbox');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reponses_predefinies');
    }

}
