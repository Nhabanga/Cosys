<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('bi');
             $table->text('nome', 100);
             $table->text('apelido', 100);
             $table->text('sexo', 10);
             $table->integer('telefone1');
             $table->integer('telefone2');
             $table->text('city', 25);
             $table->text('bairro', 25);
             $table->text('destino', 50);
             $table->integer('bilhete_q');
             $table->datetime('data_cad');
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
        Schema::dropIfExists('clientes');
    }
}
