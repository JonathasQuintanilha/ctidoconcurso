<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaCurso extends Model
{
		protected $table = 'categoriacursos';
		protected $fillable = ['nome'];

	    public function user() {
	        return $this->belongsToMany('App\User', 'users_has_cursos', 'curso_id', 'users_id');
	    }

	    public function materia(){
	    	return $this->hasMany('App\Materia', 'curso_id');
	    }

	    public function curso(){
	    	return $this->hasMany('App\Curso', 'categoriacurso_id');
	    }
}
