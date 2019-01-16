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

            $table->string('users_nom')->nullable();
            $table->string('users_prenom')->nullable();
            $table->dateTime('users_date_de_naissance')->nullable();
            $table->string('users_rue')->nullable();
            $table->string('users_code_postal')->nullable();
            $table->string('users_ville')->nullable();
            $table->string('users_telephone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('users_status')->nullable();

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
