<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('idVeiculo');
            $table->string('modelo');
            $table->string('ano', 4);
            $table->string('cor');
            $table->string('placa');
            $table->integer('idMotorista')->unsigned();
            $table->foreign('idMotorista')->references('idMotorista')->on('motoristas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
