<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('niveau_id')->unsigned();
            $table->integer('contact_id')->unsigned();

            $table->String('offres_poste');
            $table->dateTime('offres_date_offre');
            $table->String('offres_description');
            $table->integer('offres_mois_experience');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('offres');
    }

}
