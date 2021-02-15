<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInadmitidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inadmitidos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('departure_id')->unsigned();
            $table->integer('airline_id')->unsigned();
            $table->integer('numExpediente');
            $table->string('nombre');
            $table->string('airline');
            $table->enum('security',['ICTS','SEGURISA','ARIETE','TRABLISA']);
            $table->date('fechaEntrada');
            $table->date('fechaSalida');
            $table->time('horaSalida');
            $table->string('vueloSalida');
            $table->enum('menor',['si','no'])->default('no');
            $table->enum('pertenencias',['si','no']);
            $table->enum('sala',['HOMBRES','MUJERES','CONTINGENCIA_HOMBRES','CONTINGENCIA_FAMILIAS']);
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
        Schema::dropIfExists('inadmitidos');
    }
}
