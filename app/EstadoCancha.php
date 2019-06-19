<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCancha extends Model
{
    public $timestamps = false;

    protected $table = 'estadocanchas';

    protected $fillable = ['descripcion'];

    protected $primaryKey = 'id';
}
