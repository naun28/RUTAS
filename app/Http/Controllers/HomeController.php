<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function escuela()
    {
        return view('escuelas');
    }

    public function users()
    {
        return view('usuarios');
    }
    
    public function agenda()
    {
        return view('agendar');
    }
    public function perfil()
    {
        return view('perfilesusuarios');
    }


    public function calculomet(){
        return view('costo');
    }
    public function brigadistamet(){
        return view('brigadista');
    }
    public function secretariamet(){
        return view('secretaria');
    }
    public function reportesmet(){
        return view('reporte');
    }
}
