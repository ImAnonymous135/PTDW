<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operadores', function (Blueprint $table) {
            $table->foreign('solicitante_sala')->references('id')->on('cliente')->onDelete('cascade')->primary();
            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
        });

        Schema::table('cliente', function (Blueprint $table) {
            $table->foreign('id_responsavel')->references('id')->on('operadores')->onDelete('cascade')->primary();
        });

        Schema::table('movimentos', function (Blueprint $table) {
            $table->foreign('embalagemid')->references('id')->on('embalagem')->onDelete('cascade');
            $table->foreign('operadorid')->references('id')->on('operadores')->onDelete('cascade');
            $table->foreign('fornecedorid')->references('id')->on('fornecedor')->onDelete('cascade');
        });

        Schema::table('movimentos_produtos_quimicos', function (Blueprint $table) {
            $table->foreign('movimentos_n_ordem')->references('n_ordem')->on('movimentos')->onDelete('cascade')->primary();
            $table->foreign('id_estado_fisico')->references('id')->on('estado_fisico')->onDelete('cascade');
            $table->foreign('id_textura_viscosidade')->references('id')->on('textura_viscosidade')->onDelete('cascade');
            $table->foreign('id_cor')->references('id')->on('cor')->onDelete('cascade');
        });

        Schema::table('movimentos_produtos_nao_quimicos', function (Blueprint $table) {
            $table->foreign('movimentos_n_ordem')->references('n_ordem')->on('movimentos')->onDelete('cascade')->primary();
            $table->foreign('id_tipo_embalagem')->references('id')->on('tipo_embalagem')->onDelete('cascade');
            $table->foreign('id_cor')->references('id')->on('cor')->onDelete('cascade');
        });

        Schema::table('embalagem', function (Blueprint $table) {
            $table->foreign('id_produtos')->references('id')->on('produtos')->onDelete('cascade')->primary();
            $table->foreign('id_tipo_embalagem')->references('id')->on('tipo_embalagem')->onDelete('cascade');
            $table->foreign('localizacao')->references('id')->on('prateleiras')->onDelete('cascade');
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('id_unidades')->references('id')->on('unidades')->onDelete('cascade')->primary();
        });

        Schema::table('produtos_nao_quimicos', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade')->primary();
            $table->foreign('id_familia')->references('id')->on('familia')->onDelete('cascade');
        });

        Schema::table('produtos_quimicos', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade');
        });

        Schema::table('produtos_sinonimos', function (Blueprint $table) {
            $table->foreign('id_produtos')->references('id')->on('produtos')->onDelete('cascade')->primary();
            $table->foreign('sinonimo_sinonimo')->references('sinonimo')->on('sinonimos')->onDelete('cascade');
        });

        Schema::table('registo_saidas', function (Blueprint $table) {
            $table->foreign('embalagemid')->references('id')->on('embalagem')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
            $table->foreign('id_solicitante')->references('id')->on('operadores')->onDelete('cascade');
            $table->foreign('id_operador')->references('id')->on('operadores')->onDelete('cascade');
        });

        Schema::table('prateleiras', function (Blueprint $table) {
            $table->foreign('id_armario')->references('id')->on('armario')->onDelete('cascade')->primary();
        });

        Schema::table('armario', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade')->primary();
        });

        Schema::table('produtos_quimicos_pictogramas', function (Blueprint $table) {
            $table->foreign('id_produtos_quimicos')->references('id_produto')->on('produtos_quimicos')->onDelete('cascade')->primary();
            $table->foreign('id_pictogramas')->references('id')->on('pictogramas')->onDelete('cascade');
        });

        Schema::table('codPerigo_pictogramas', function (Blueprint $table) {
            $table->foreign('id_codPerigo')->references('id')->on('codPerigo')->onDelete('cascade')->primary();
            $table->foreign('id_pictogramas')->references('id')->on('pictogramas')->onDelete('cascade');
        });

        Schema::table('codPrudencia_pictogramas', function (Blueprint $table) {
            $table->foreign('id_codPrudencia')->references('id')->on('codPrudencia')->onDelete('cascade')->primary();
            $table->foreign('id_pictogramas')->references('id')->on('pictogramas')->onDelete('cascade');
        });

        Schema::table('alerta_stock', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
