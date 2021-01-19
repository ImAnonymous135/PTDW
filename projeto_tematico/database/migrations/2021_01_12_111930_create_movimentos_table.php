<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->id('n_ordem');
            $table->integer('embalagemid');
            $table->integer('operadorid');
            $table->integer('fornecedorid');
            $table->string('marca');
            $table->string('referencia');
            $table->double('preço');
            $table->double('taxa_IVA');
            $table->double('peso_bruto');
            $table->date("data_entrada");
            $table->date("data_abertura");
            $table->date("data_validade");
            $table->date("data_termino");
            $table->string("observacoes")->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentos');
    }
}
