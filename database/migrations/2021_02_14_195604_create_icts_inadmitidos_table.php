<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIctsInadmitidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ictsInadmitidos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('departure_id')->unsigned();
            $table->integer('airline_id')->unsigned();
            $table->integer('numExpediente');
            $table->integer('numCustodia');
            $table->string('nombre');
            $table->string('airline');
            $table->date('fechaEntrada');
            $table->date('fechaSalida');
            $table->time('horaSalida');
            $table->time('horaRealSalida');
            $table->string('vueloSalida');
            $table->time('horaEntrada');
            $table->timestamps();
            //referencias
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('departure_id')->references('id')->on('departures')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ictsInadmitidos');
    }
}
