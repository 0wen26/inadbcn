<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function civilizaciones()
    {
        //obtenemos todos los usuarios
        $users = DB::table('arrivals')->get();

        return $users;
    }
}
