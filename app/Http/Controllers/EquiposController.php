<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    //no hacemos invoke porque queremos administrar desde aqui el crud referente a los equipos.
    public function index(){
        //metodo encargado de mostrar la vista principal
        return "Pagina principal de los equipos participantes, aqui podras ver el listado de todos nuestros equipos";
    }
    public function create(){
        //metodo encargado de crear
        return 'Espacio destinado a añadir nuevos equipos';
    }
    public function edit($equipo){
        //metodo encargado de editar
        return 'Espacio destinado a editar';
    }
    public function delete($equipo1){
        //metodo encargado de eliminar
        return 'Espacio destinado a eliminar equipos que ya no desean participar';
    }
}
