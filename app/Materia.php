<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Materia extends Model
{

	protected $fillable = ['nome','curso_id',];

	public $timestamps = false;	

	protected $table = 'materias';

    public function curso(){
		return $this->belongsTo('App\Curso');
    }

    public function aula(){
		return $this->hasMany('App\Aula');
    }
}
