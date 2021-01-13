<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistoSaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registo_saidas', function (Blueprint $table) {
            $table->id('n_ordem');
            $table->integer('id_produto');
            $table->integer('id_cliente');
            $table->date('data');
            $table->integer('id_solicitante');
            $table->integer('id_operador');
            $table->string('observacao')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registo__saidas');
    }
}
