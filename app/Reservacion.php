<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    public $timestamps=false;
    public $table = "reservacion";

    protected $fillable = [
        'fecha_entrada', 'fecha_salida','habitacion_id'
    ];
}
