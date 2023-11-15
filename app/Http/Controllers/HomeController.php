<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //adiminstrara una unica ruta, la pantalla de inicio.
        return view('home');
    }
}
