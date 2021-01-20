<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentosProdutosQuimicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentos_produtos_quimicos', function (Blueprint $table) {
            $table->integer('movimentos_n_ordem');
            $table->integer('id_estado_fisico');
            $table->integer('id_textura_viscosidade');
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
        Schema::dropIfExists('movimentos__produtos__quimicos');
    }
}
