<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartido;
use App\Http\Requests\UpdatePartido;
use App\Models\Partido;

class PartidosController extends Controller
{
    public function index(){
        
        $partidos= Partido::paginate(5);

        return view('partidos', compact('partidos'));
    }
    public function create(){
 
    return view ('partidos.create');   
    }
    public function store(StorePartido $request){
       
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
    public function update(UpdatePartido $request, Partido $partido){
               
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
        
        $partido->delete();
        
        return redirect()->route('partidos.index');
    }

}
