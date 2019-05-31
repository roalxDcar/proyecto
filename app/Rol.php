<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $primaryKey = 'idrol';

    protected $fillable = [
        'descripcion',
     ];

    protected $table = 'rols';

    public $timestamps = false;

    public function user(){
    	return $this->hasMany('App\User','id_rol');
    }
}
