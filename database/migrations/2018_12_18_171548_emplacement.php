<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emplacement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('emplacement', function ( Blueprint $table ) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> decimal('longeur_max');
            $table -> decimal('largeur_max');
        });
    }
    public function down ()
    {
        Schema::dropIfExists('emplacement');
    }
}
