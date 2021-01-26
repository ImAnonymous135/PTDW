<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosQuimicosPictogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_quimicos_pictogramas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_produtos_quimicos');
            $table->integer('id_pictogramas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos__quimicos__pictogramas');
    }
}
