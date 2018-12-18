<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Administrateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('administrateur', function ( Blueprint $table ) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> string('login');
            $table -> string('mot_de_passe');
        });
    }
    public function down ()
    {
        Schema::dropIfExists('administrateur');
    }
}
