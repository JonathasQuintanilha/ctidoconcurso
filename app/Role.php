<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $fillable = ['nome'];
    protected $table = 'roles';
    protected $primaryKey = 'id';



    public function user() {
    	return $this->hasMany('App\User');
    }
}
