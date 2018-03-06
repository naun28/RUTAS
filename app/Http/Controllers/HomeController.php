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


    public function calculo(){
        return view('calc');
    }
    public function brigadista(){
        return view('brig');
    }
    public function secretaria(){
        return view('secret');
    }
    public function reportes(){
        return view('repor');
    }
}
