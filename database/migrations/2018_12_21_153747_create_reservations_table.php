<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('state');
            $table->date('date_debut');
            $table->date('date_fin');
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table -> integer('id_bateau')->unsigned();
            $table->foreign('id_bateau')->references('id')->on('bateaux');
            $table -> integer('id_emplacement')->unsigned();
            $table->foreign('id_emplacement')->references('id')->on('emplacement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
