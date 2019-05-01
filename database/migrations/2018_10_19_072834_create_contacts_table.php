<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('societe_id')->unsigned();

            $table->string('contacts_fonction');
            $table->string('contacts_nom');
            $table->string('contacts_prenom');
            $table->string('contacts_telephone')->nullable();
            $table->string('contacts_email');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        
        
        Schema::table('contacts', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contacts');
    }

}
