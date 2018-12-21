<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmplacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplacement', function (Blueprint $table) {
            $table -> increments('id');
            $table -> timestamps();
            $table -> decimal('longeur_max');
            $table -> decimal('largeur_max');
        });
        Schema::table('emplacement', function (Blueprint $table) {
            $table -> integer('id_gestionnaire')->unsigned();
            $table->foreign('id_gestionnaire')->references('id')->on('utilisateur');
            $table -> integer('id_port')->unsigned();
            $table->foreign('id_port')->references('id')->on('port');
            $table -> integer('id_bateaux')->unsigned();
            $table->foreign('id_bateaux')->references('id')->on('bateaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emplacement');
    }
}
