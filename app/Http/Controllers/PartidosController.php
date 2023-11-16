<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Equipo;
class PartidosController extends Controller
{
    public function index(){
        //metodo encargado de mostrar la vista principal
        $partidos= Partido::paginate(4);
        return view('partidos', compact('partidos'));
    }
    public function create(Request $request){
        //metodo encargado de crear
        $partido = new Partido;
        $partido->fecha_partido = $request->fecha_partido;
        $partido->hora_partido = $request->hora_partido;
        $partido->campo = $request->campo;
        $partido->equipo_local = $request->equipo_local;
        $partido->goles_local = $request->goles_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->goles_visitante = $request->goles_visitante;
        $partido->save();
       
        

        return redirect()->route('partidos.index');
        //return redirect()->route('partidos.index');
       //return 'llegando señal';
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
