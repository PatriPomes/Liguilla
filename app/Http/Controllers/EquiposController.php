<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipo;
use App\Http\Requests\UpdateEquipo;
use Illuminate\Http\Request;
use App\Models\Equipo;


class EquiposController extends Controller
{
    public function index(){
        
        $equipos= Equipo::all();
        
        return view('equipos', compact('equipos'));
    }
    public function create(CreateEquipo $request){
        
        $equipo = new Equipo;
        $equipo->name = $request->name;
        $equipo->campo = $request->campo;
        $equipo->save();

        return redirect()->route('equipos.index'); 
    }
    public function edit(Equipo $equipo){

        return view('equipos.edit', compact('equipo'));
        
    }
    public function update(UpdateEquipo $request, Equipo $equipo){

        $equipo->name = $request->name;
        $equipo->campo = $request->campo;
        $equipo->save();

        return redirect()->route('equipos.index');
    }
    public function destroy(Equipo $equipo){
       
        $equipo->delete();
        
        return redirect()->route('equipos.index');
    }

}
