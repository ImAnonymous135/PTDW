<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operadores', function (Blueprint $table) {
            $table->id();
            $table->integer("solicitante_sala")->nullable(true);
            $table->integer("id_perfil");
            $table->string('nome');
            $table->string('email');
            $table->string('observacoes')->nullable(true);
            $table->date('data_criação');
            $table->date('data_eliminação')->nullable(true);
            $table->date('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operadores');
    }
}
