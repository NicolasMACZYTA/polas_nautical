<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Port extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('port', function ( Blueprint $table ) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> string('nom');
            $table -> string('ville');
        });
    }
    public function down ()
    {
        Schema::dropIfExists('port');
    }
}
