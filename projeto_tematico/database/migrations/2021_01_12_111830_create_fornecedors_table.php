<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->string('morada');
            $table->string('localidade');
            $table->string('codigo_postal');
            $table->integer('telefone');
            $table->integer('nif');
            $table->string('email')->nullable(true);
            $table->string('vendedor_1')->nullable(true);
            $table->integer('telemovel_1')->nullable(true);
            $table->string('email_1')->nullable(true);
            $table->string('vendedor_2')->nullable(true);
            $table->integer('telemovel_2')->nullable(true);
            $table->string('email_2')->nullable(true);
            $table->string('condicoes_especiais')->nullable(true);
            $table->string('observacoes')->nullable(true);
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
        Schema::dropIfExists('fornecedors');
    }
}
