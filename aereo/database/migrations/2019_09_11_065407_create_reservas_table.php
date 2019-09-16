<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_reserva');
             $table->string('bi')unsigned();
             $table->text('partida', 50);
             $table->text('destino', 50);
             $table->datetime('data_reserva');
             $table->integer('reserva_q');
             $table->timestamps();

           $table-> foreign('bi')
           ->references('bi')
           ->on('cliente');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
