<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTableCarona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caronas', function (Blueprint $table) {
            $table->increments('idCarona');
            $table->integer('idMotorista')->unsigned();
            $table->string('cidadePartida');
            $table->string('cidadeChegada');
            $table->dateTime('data');
            $table->time('hora');
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
        Schema::dropIfExists('caronas');
    }
}
