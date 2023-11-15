<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
class PartidosController extends Controller
{
    public function index(){
        //metodo encargado de mostrar la vista principal
        $partidos= Partido::all();
        return view('partidos', compact('partidos'));
    }
    public function create(){
        //metodo encargado de crear
        return view('partidos');
    }
    public function edit($partido){
        //metodo encargado de editar
        return view('partidos');
    }
    public function delete($partido){
        //metodo encargado de eliminar
        return view('partidos');
    }

}
