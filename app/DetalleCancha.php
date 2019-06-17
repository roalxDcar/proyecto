<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCancha extends Model
{
    public $timestamps = false;

    protected $table = 'detallecanchas';

    protected $primaryKey = 'id';

    public function centro()
    {
        return $this->belongsTo('App\Centro','id_centro');
    }

    public function cancha()
    {
        return $this->belongsTo('App\Cancha','id_cancha');
    }
}
