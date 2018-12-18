<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gestionnaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('gestionnaire', function ( Blueprint $table ) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> string('nom');
            $table -> string('prenom');
            $table -> string('login');
            $table -> string('mot_de_passe');
        });
    }
    public function down ()
    {
        Schema::dropIfExists('gestionnaire');
    }
}
