<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
//use App\Models\Equipo;
class PartidosController extends Controller
{
    public function index(){
        //metodo encargado de mostrar la vista principal
        $partidos= Partido::paginate(5);
        return view('partidos', compact('partidos'));
    }
    public function create(){
 
    return view ('partidos.create');   
    }
    public function store(Request $request){
        $request->validate([
            'fecha_partido'=>'required|after:today',
            'hora_partido'=>'required',
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id|different:equipo_local_id',
        ]);

        $partido = new Partido;
        $partido->fecha_partido = $request->fecha_partido;
        $partido->hora_partido = $request->hora_partido;
        $partido->campo = $request->campo;
        $partido->equipo_local_id = $request->equipo_local_id;
        $partido->goles_local = $request->goles_local;
        $partido->goles_visitante = $request->goles_visitante;
        $partido->equipo_visitante_id = $request->equipo_visitante_id;
       
        
        $partido->save();
       
        return redirect()->route('partidos.index');
    }
    public function edit(Partido $partido){

        return view('partidos.edit', compact('partido'));
        
    }
    public function update(Request $request, Partido $partido){
       $request->validate([
            'fecha_partido'=>'required|after:today',
            'hora_partido'=>'required',
            'equipo_local_id' => 'required|exists:equipos,id',
            'equipo_visitante_id' => 'required|exists:equipos,id|different:equipo_local_id',
        ]);
        
        $partido->fecha_partido = $request->fecha_partido;
        $partido->hora_partido = $request->hora_partido;
        $partido->campo = $request->campo;
        $partido->equipo_local_id = $request->equipo_local_id;
        $partido->goles_local = $request->goles_local;
        $partido->goles_visitante = $request->goles_visitante;
        $partido->equipo_visitante_id = $request->equipo_visitante_id;
       
        
        $partido->save();
       
        return redirect()->route('partidos.index');
    }
    public function destroy(Partido $partido){
        //metodo encargado de eliminar
        $partido->delete();
        
        return view('partidos');
    }

}
