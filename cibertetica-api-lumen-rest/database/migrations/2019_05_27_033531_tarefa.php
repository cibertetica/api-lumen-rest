<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarefa', function (Blueprint $table) { // Dados de lista de tarefas
            $table->increments('idTarefa');
            $table->string('nome');
            $table->timestamps();
            $table->boolean('concluido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Tarefa');
    }
}
