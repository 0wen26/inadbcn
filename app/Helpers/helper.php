<?php

namespace App\Helpers;
use App\User;
use App\Inadmitido;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function inadmitidos()
    {
        //obtenemos todos los usuarios
        $users = User::join('inadmitidos','users.id','=','inadmitidos.user_id')
        ->where('users.id','=','1')
        ->addSelect(['users.name as name','inadmitidos.airline as airline','inadmitidos.numExpediente as numExp','inadmitidos.nombre as nombreInad',
        'inadmitidos.security as security','inadmitidos.fechaEntrada as feEmtrada','inadmitidos.fechaSalida as feSalida','inadmitidos.horaSalida as hSalida',
        'inadmitidos.vueloSalida as vSalida','inadmitidos.menor as menor','inadmitidos.pertenencias as pertenencias','inadmitidos.sala as sala'])
        ->get();

        $jsonString =json_encode($users);
        return $jsonString;
    }

    public static function inadmitidosIcts()
    {
        //obtenemos todos los usuarios
        $users = User::join('ictsinadmitidos','users.id','=','ictsinadmitidos.user_id')
        ->where('users.id','=','1')
        ->addSelect(['users.name as name','ictsinadmitidos.airline as airline','ictsinadmitidos.numExpediente as numExp','ictsinadmitidos.nombre as nombreInad',
        'ictsinadmitidos.fechaEntrada as feEmtrada','ictsinadmitidos.fechaSalida as feSalida','ictsinadmitidos.horaSalida as hSalida',
        'ictsinadmitidos.vueloSalida as vSalida','ictsinadmitidos.numCustodia as cust','ictsinadmitidos.fechaEntrada as fEntrada','ictsinadmitidos.horaRealSalida as HRSal','ictsinadmitidos.observaciones as obs',
            'ictsinadmitidos.horaEntrada as hEntrad'])
        ->get();

        $jsonString =json_encode($users);
        return $jsonString;
    }

    public static function llegadasVu()
    {
         //obtenemos todos los usuarios
         $users = DB::table('arrivals')->get();

         $jsonString =json_encode($users);
         return $jsonString;
    }
    public static function salidasVu()
    {
        //obtenemos todos los usuarios
        $users = DB::table('departures')->get();

        $jsonString =json_encode($users);
        return $jsonString;
    }
}
