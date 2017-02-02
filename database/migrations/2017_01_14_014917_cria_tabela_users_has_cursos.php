<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaUsersHasCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::enableForeignKeyConstraints();
        Schema::create('users_has_cursos', function(Blueprint $table) {
                
                $table->increments('id');
                $table->integer('users_id')->unsigned();
                $table->integer('cursos_id')->unsigned();                
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
        Schema::dropIfExists('users_has_cursos');
    }
}
