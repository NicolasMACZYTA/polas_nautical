<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> string('nom');
            $table -> string('prenom');
            $table -> string('login');
            $table -> string('mot_de_passe');
        });
        Schema::table('utilisateur', function (Blueprint $table) {
            $table -> integer('id_droit')->unsigned();
            $table->foreign('id_droit')->references('id')->on('droit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
