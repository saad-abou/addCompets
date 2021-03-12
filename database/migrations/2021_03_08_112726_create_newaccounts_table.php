<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newaccounts', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('statut')->nullable();
            $table->string('specialite')->nullable();
            $table->string('departement')->nullable();
            $table->string('secteur')->nullable();
            $table->string('adress')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('email')->unique();
            $table->string('gsm')->nullable();
            $table->boolean('addedCompte');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newaccounts');
    }
}
