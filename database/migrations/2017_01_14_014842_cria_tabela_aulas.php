<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaAulas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::enableForeignKeyConstraints();
        Schema::create('aulas', function(Blueprint $table) {
                
                $table->increments('id');
                $table->integer('materias_id')->unsigned();;
                $table->string('nome', 255);
                $table->string('assunto', 255);
                $table->string('data', 10);

                
                
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
        Schema::dropIfExists('aulas');
    }
}
