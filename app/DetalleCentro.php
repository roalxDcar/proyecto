<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCentro extends Model
{
    // protected $fillable = ['propietario','nit','domicilio','actividad'];
    public $timestamps = false;

    protected $table = 'detallecentros';

    protected $primaryKey = 'id';
}