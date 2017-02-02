<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::enableForeignKeyConstraints();
        Schema::create('materias', function(Blueprint $table) {
                
                $table->increments('id');
                $table->integer('cursos_id')->unsigned();;
                $table->string('nome', 255);
                
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
        Schema::dropIfExists('materias');
    }
}
