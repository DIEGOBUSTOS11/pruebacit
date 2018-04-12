<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;

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
        $imagenes = Imagen::all(); //utilizamso  el modelo eloquent
      
   //dd($users); //imprimo todos los usuarios
    $title = 'Listado de Imagenes';
    return view('imagenes.index',compact('title','imagenes')); // array asociativo
    }
}
