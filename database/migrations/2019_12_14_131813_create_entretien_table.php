<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntretienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entretien', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('piece');
            $table->date('date_entretien');
            $table->date('date_prochain');
        });
        Schema::table('entretien', function (Blueprint $table) {
            $table -> integer('id_bateau')->unsigned();
            $table->foreign('id_bateau')->references('id')->on('bateaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entretien');
    }
}
