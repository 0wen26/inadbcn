<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    //
    protected $table ="arrivals";
    protected $fillable= ['airline','numeroVuelo','hora','dia','destino'];
}
