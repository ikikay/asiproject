<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('societes_libelle');
            $table->string('societes_rue')->nullable();
            $table->string('societes_code_postal')->nullable();
            $table->string('societes_ville')->nullable();
            $table->string('societes_telephone')->nullable();
            $table->string('societes_email')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('societes');
    }

}
