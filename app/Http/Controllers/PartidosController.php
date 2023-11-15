<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidosController extends Controller
{
    public function index(){
        //metodo encargado de mostrar la vista principal
        return "Pagina principal de los partidos de esta liguilla";
    }
    public function create(){
        //metodo encargado de crear
        return 'Espacio destinado a añadir nuevos partidos';
    }
    public function edit($partido){
        //metodo encargado de editar
        return 'Espacio destinado a editar la informacion de los partidos';
    }
    public function delete($partido){
        //metodo encargado de eliminar
        return 'Espacio destinado a eliminar partidos que ya no se realizaran';
    }

}
