<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    public $timestamps=false;
    public $table = "reservacion";

    protected $fillable = [
        'fecha_entrada', 'fecha_salida','habitacion_id','users_id'
    ];

    public function User(){
        return $this->belongsTo('App\User', 'id');
    }

    public function Habitaciones(){
        return $this->belongsTo('App\Habitaciones', 'id');
  
    }
}
