<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IctsInadmitido extends Model
{
    //
    protected $table ="ictsInadmitidos";
    protected $fillable =['numCustodia','airline','fechaEntrada','fechaSalida','horaSalida','horaRealSalida','vueloSalida','observaciones','horaEntrada'];

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
