<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    //
    protected $table ="arrivals";
    protected $fillable= ['numeroVuelo','hora','dia','destino'];

    public function airlines()
    {
        return $this->hasMany('App\Airline');
    }
}
