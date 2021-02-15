<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    //
    protected $table = "airlines";
    protected $fillable =['airline','codigoIata','codigoIcao'];

    public function ictsInadmitidos()
    {
        return $this->belongsTo('App\ictsInadmitido');
    }
    public function inadmitidos()
    {
        return $this->belongsTo('App\inadmitido');
    }
}
