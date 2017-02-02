<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{			

	protected $table = 'aulas';
	protected $fillable = ['nome','assunto','data','materia_id'];



    public function materia() {
		return $this->belongsTo('App\Materia', 'materia_id', 'id');
    }




    public function material() {
		return $this->hasMany('App\Material', 'aula_id');
    }
   
}
