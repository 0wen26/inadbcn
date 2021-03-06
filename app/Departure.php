<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    //
    protected $table ="departures";
    protected $fillable= ['numeroVuelo','hora','dia','destino'];

    public function ictsInadmitidos()
    {
        return $this->belongsTo('App\ictsInadmitido');
    }
    public function inadmitidos()
    {
        return $this->belongsTo('App\inadmitido');
    }
    public function airlines()
    {
        return $this->hasMany('App\Airline');
    }

}
