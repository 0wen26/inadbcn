<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrivals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_airline')->unsigned();
            $table->string('airline');
            $table->string('numeroVuelo');
            $table->time('hora');
            $table->string('diaSemana');
            $table->string('destino');
            $table->timestamps();

            $table->foreign('id_airline')->references('id')->on('airlines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrivals');
    }
}
