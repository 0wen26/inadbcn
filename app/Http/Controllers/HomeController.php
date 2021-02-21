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
    public function Llegadas()
    {
        # code...
        $infoTiempos = Helper::civilizaciones();
        $info =json_decode($infoTiempos,true);

        return view('admin', compact('info'));
    }
}
