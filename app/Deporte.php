<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    //
    protected $fillable = [ 'nombre' ];

    protected $primarykay = 'id';

    protected $table = 'deportes';
}
