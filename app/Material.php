<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiais';
    protected $primaryKey = 'id';

    protected $fillable = ['nome','link','aula_id', 'type'];



    public function aula() {
    		$this->belongsTo('App\Aula');
    }
}
