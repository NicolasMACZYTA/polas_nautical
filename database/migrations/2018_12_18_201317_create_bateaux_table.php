<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBateauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateaux', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom' ,25);
            $table->string('modele');
            $table->decimal('longueur' ,4 ,2);
            $table->decimal('largeur' ,4 ,2);
            $table->date('date_construction');
        });
        Schema::table('bateaux', function(Blueprint $table){
            $table->integer('id_proprietaire')->unsigned();
            $table->foreign('id_proprietaire')->references('id')->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateaux');
    }
}
