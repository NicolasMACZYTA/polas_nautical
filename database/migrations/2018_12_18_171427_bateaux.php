<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bateaux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('bateaux', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('nom' ,25);
            $table->string('modele');
            $table->decimal('longueur' ,4 ,2);
            $table->decimal('largeur' ,4 ,2);
            $table->date('date_construction');
        });

    }
    public function down ()
    {
        Schema::dropIfExists('bateaux');

    }
}
