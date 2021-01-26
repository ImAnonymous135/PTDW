<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePictogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictogramas', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->string('imagem');
        });

        DB::table('pictogramas')->insert([
            ['designacao' => 'skull', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS06_skull.png'],
            ['designacao' => 'explosive', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS01_explos.png'],
            ['designacao' => 'flame', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS02_flamme.png'],
            ['designacao' => 'flame2', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS03_rondflam.png'],
            ['designacao' => 'bottle', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS04_bottle.png'],
            ['designacao' => 'acid', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS05_acid_red.png'],
            ['designacao' => 'danger', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS07_exclam.png'],
            ['designacao' => 'lungs', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS08_silhouete.png'],
            ['designacao' => 'pollution', 'imagem' => 'https://www.reach-compliance.ch/downloads/GHS09_aq-pollut.png'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictogramas');
    }
}
