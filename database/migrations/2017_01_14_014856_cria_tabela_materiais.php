<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaMateriais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::enableForeignKeyConstraints();
        Schema::create('materiais', function(Blueprint $table) {
                
                $table->increments('id');
                $table->integer('aulas_id')->unsigned();;
                $table->string('nome', 255);
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
        Schema::dropIfExists('materiais');
    }
}
