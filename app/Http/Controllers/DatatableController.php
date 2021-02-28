<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function searchLlegadas(Request $request)
    {
        //$term = $request->get('term');
        //$Arrival = Arrival::where('numeroVuelo','LIKE','%'. $term. '%')
        //->Select(['numeroVuelo as numVuelo','airline as airline','hora as hora','diaSemana as diaSemana','destino as destino'])
        //->get();

       //$arrival = Arrival::all();
        //$jsonString=json_encode($arrival);
        //return datatables()->collection(User::all())->toJson();
    }
}
