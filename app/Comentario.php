<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    // protected $fillable = [ 'nombre' ];

    protected $primarykay = 'id';

    protected $table = 'comentarios';
}
