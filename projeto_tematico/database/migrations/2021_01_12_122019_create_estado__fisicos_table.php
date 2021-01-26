<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_fisico', function (Blueprint $table) {
            $table->id();
            $table->string('estado_fisico');
        });

        DB::table('estado_fisico')->insert([
            ['estado_fisico' => 'Líquido'],
            ['estado_fisico' => 'Sólido'],
            ['estado_fisico' => 'Gasoso'],
            ['estado_fisico' => 'Plasma'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado__fisicos');
    }
}
