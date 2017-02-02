<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // Schema::enableForeignKeyConstraints();
        Schema::create('cursos', function(Blueprint $table) {
                
                $table->increments('id');
                $table->string('nome', 255);
                $table->string('inicio', 10);
                $table->string('termino', 10);
                $table->timestamps();


         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
