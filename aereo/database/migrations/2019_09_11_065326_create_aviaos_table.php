<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAviaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_aviao');
             $table->text('nome_fabricante', 100);
             $table->integer('assentos');
             $table->increments('cod_v');
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
        Schema::dropIfExists('aviaos');
    }
}
