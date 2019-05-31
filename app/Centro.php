<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    public $timestamps = false;

    protected $table = 'centros';

    protected $primaryKey = 'id';

    public function detallecentro()
    {
        return $this->belongsTo('App\DetalleCentro','id_detalle');
    }
}
