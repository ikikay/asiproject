<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesReponsesPredefiniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('reponse_reponsesPredefinie', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reponse_id')->unsigned();
            $table->integer('reponse_predefinie_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('reponse_reponsesPredefinie');
    }

}
