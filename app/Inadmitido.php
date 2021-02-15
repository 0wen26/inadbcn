<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inadmitido extends Model
{
    //
    protected $table = 'inadmitidos';
    protected $fillable = [
        'name', 'fechaEntrada', 'fechaSalida', 'airline', 'departure','horaSalida','vueloSalida'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function airlines()
    {
        return $this->hasMany('App\Airline');
    }
    public function departures()
    {
        return $this->hasMany('App\Departure');
    }
}
