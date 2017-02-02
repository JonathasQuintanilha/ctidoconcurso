<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use App\Materia;



class Curso extends Model
{
	protected $table = 'cursos';
	protected $fillable = ['nome', 'inicio','termino'];

    public function user() {
        return $this->belongsToMany('App\User', 'users_has_cursos', 'curso_id', 'users_id');
    }

    public function materia(){
    	return $this->hasMany('App\Materia', 'curso_id');
    }

    public function categoriacurso(){
    	return $this->belongsTo('App\CategoriaCurso');
    }
}
