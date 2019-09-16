<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_voo');
             $table->string('bi')->unsigned();
             $table->integer('cod_aviao')->unsigned();
             $table->datetime('hora_partida');
             $table->datetime('hora_chegada');
             $table->text('destino', 25);
             $table->datetime('data_p');
            $table->timestamps();

            $table-> foreign('bi')
           ->references('bi')
           ->on ('cliente');

           $table-> foreign('cod_aviao')
           ->references('cod_aviao')
           ->on('aviao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voos');
    }
}
