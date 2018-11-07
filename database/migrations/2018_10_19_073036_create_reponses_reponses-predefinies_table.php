<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponseReponsesPredefiniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reponses_reponses_predefinies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reponse_id')->unsigned();
            $table->integer('reponse_predefinies_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reponses_reponses_predefinies');
    }

}
