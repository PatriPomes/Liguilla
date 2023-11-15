<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    //no hacemos invoke porque queremos administrar desde aqui el crud referente a los equipos.
    public function index(){
        //metodo encargado de mostrar la vista principal
        return view('equipos');
    }
    public function create(){
        //metodo encargado de crear
        return view('equipos');
    }
    public function edit($equipo){
        //metodo encargado de editar
        return view('equipos');
    }
    public function delete($equipo){
        //metodo encargado de eliminar
        return view('equipos');
    }
}
