<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexturaViscosidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textura_viscosidade', function (Blueprint $table) {
            $table->id();
            $table->string('textura_viscosidade');
        });

        DB::table('perfil')->insert([
            ['textura_viscosidade' => 'Sólido'],
            ['textura_viscosidade' => 'Semi-sólido'],
            ['textura_viscosidade' => 'Altamente viscoso'],
            ['textura_viscosidade' => 'Viscosidade média'],
            ['textura_viscosidade' => 'Viscosidade baixa'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textura_viscosidades');
    }
}
