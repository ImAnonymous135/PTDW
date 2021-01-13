<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosProdutosNaoQuimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos_produtos_nao_quimicos', function (Blueprint $table) {
            $table->integer('movimentos_n_ordem');
            $table->integer('id_tipo_embalagem');
            $table->integer('id_cor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentos__produtos__nao__quimicos');
    }
}
