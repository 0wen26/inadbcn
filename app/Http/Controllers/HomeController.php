<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Arrival;
use App\Departure;
use Yajra\DataTables\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexes()
    {
        return view('/home');
    }
    public function admin()
    {
        return view('admin');
    }
    public function icts()
    {
        return view('user');
    }
    public function inadmitidos()
    {
        # code...
        $inadmitidos = Helper::inadmitidos();
        $inad = json_decode($inadmitidos, true);

        return view('Inad', compact('inad'));
    }
    public function inadIcts()
    {
        # code...
        $inadmitidos = Helper::inadmitidosIcts();
        $inadIcts = json_decode($inadmitidos, true);

        return view('inadIcts', compact('inadIcts'));
    }
    public function llegadasVu()
    {

        return view('llegadas');
    }
    public function salidasVu()
    {
        #

        return view('salidas');
    }
    public function searchLlegadas(Request $request)
    {
        $arrival = Arrival::all();
        return datatables()->of($arrival)
        ->addColumn('edit', '<a href="{{route(\'llegadas.edit\' ,$id)}}" class="btn btn-info btn-sm">' . ('Editar') . '</a>')
        ->addColumn('delete', '<a href="{{route(\'llegadas.delete\' ,$id)}}" class="btn btn-info btn-sm">' . ('Eliminar') . '</a>')
        ->rawColumns(['edit','delete'])
            ->toJson();
    }
    public function searchSalidas(Request $request)
    {
        $departure = Departure::all();
        return datatables()->of($departure)
        ->addColumn('edit', '<a href="{{route(\'salidas.edit\' ,$id)}}" class="btn btn-info btn-sm">' . ('Editar') . '</a>')
        ->addColumn('delete', '<a href="{{route(\'salidas.delete\' ,$id)}}" class="btn btn-info btn-sm">' . ('Eliminar') . '</a>')
            ->rawColumns(['edit','delete'])
            ->toJson();
    }
    public function salidasDelete()
    {

    }
    public function salidasEdit( )
    {
        dd($_GET);
        return view('dataTable.edit');
    }
    public function insertarSalida(Request $request)
    {
        dd($request);


    }
}
