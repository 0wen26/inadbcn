<?php

namespace App\Http\Controllers;
use App\Helpers\Helper;
use Illuminate\Http\Request;

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
        $inad =json_decode($inadmitidos,true);
        //dd($infoTiempos);
        return view('Inad', compact('inad'));
    }
    public function inadIcts(){
         # code...
         $inadmitidos = Helper::inadmitidosIcts();
         $inadIcts =json_decode($inadmitidos,true);
         //dd($infoTiempos);
         return view('inadIcts', compact('inadIcts'));
    }
    public function llegadasVu(){
        # code...
        $lleg = Helper::llegadasVu();
        $vuLleg =json_decode($lleg,true);
        //dd($infoTiempos);
        return view('llegadas', compact('vuLleg'));
   }
   public function salidasVu(){
    # code...
    $sal = Helper::salidasVu();
    $vuSal =json_decode($sal,true);
    //dd($infoTiempos);
    return view('salidas', compact('vuSal'));
}
}

