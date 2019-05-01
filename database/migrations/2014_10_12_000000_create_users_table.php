<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('users_nom');
            $table->string('users_prenom');
            $table->dateTime('users_date_de_naissance')->nullable()->default(null);
            $table->string('users_rue')->nullable()->default(null);
            $table->string('users_code_postal')->nullable()->default(null);
            $table->string('users_ville')->nullable()->default(null);
            $table->string('users_telephone')->nullable()->default(null);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'user', 'en attente']);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
