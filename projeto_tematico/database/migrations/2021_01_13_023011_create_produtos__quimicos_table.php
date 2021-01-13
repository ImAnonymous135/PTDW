<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosQuimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_quimicos', function (Blueprint $table) {
            $table->integer('id_produto')->primary();
            $table->string('formula');
            $table->float('pMolecular');
            $table->string('casN');
            $table->string('condicaoArmazenamento');
            $table->boolean('ventilado');
            $table->binary('anexosSDS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos__quimicos');
    }
}
