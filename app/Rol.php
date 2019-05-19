<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $primaryKey = 'idrol';

    protected $table = 'rols';

    public $timestamps = false;

    public function users(){
    	return $this->hasMany('users','id');
    }
}
