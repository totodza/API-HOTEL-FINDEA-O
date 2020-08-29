<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipodehabitacion extends Model
{
    public $timestamps=false;
    public $table = "tipodehabitacion";

    protected $fillable = [
        'nombrehabitacion', 'numerocamas', 'aire','precio','imagen'
    ];

    public function Habitaciones(){
        return $this->hasMany('App\Habitaciones');
    }
}
