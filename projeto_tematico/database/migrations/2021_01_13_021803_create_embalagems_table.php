<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbalagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embalagem', function (Blueprint $table) {
            $table->id();
            $table->integer('designacao');
            $table->integer('id_produtos');
            $table->integer('id_tipo_embalagem');
            $table->integer('localizacao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embalagems');
    }
}
