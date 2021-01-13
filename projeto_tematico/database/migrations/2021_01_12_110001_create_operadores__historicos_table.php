<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperadoresHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operadores_historico', function (Blueprint $table) {
            $table->id();
            $table->string("nome_administrador");
            $table->string("operador");
            $table->date('data');
            $table->string('operacao');
            $table->string('observacoes')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operadores__historicos');
    }
}
