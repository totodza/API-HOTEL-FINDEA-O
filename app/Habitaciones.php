<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    public $timestamps=false;
    public $table = "habitacion";

    protected $fillable = [
        'numero', 'piso', 'estado','tipodehabitacion_id'
    ];
}
