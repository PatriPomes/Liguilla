<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;


class EquiposController extends Controller
{
    //no hacemos invoke porque queremos administrar desde aqui el crud referente a los equipos.
    public function index(){
        //metodo encargado de mostrar la vista principal
        $equipos= Equipo::all();
        return view('equipos', compact('equipos'));
    }
    public function create(Request $request){
        //metodo encargado de crear
        $request->validate([
            'name' => 'required|unique:equipos',
            'campo' => 'required',
           ]);

        $equipo = new Equipo;
        $equipo->name = $request->name;
        $equipo->campo = $request->campo;
        $equipo->save();

        return redirect()->route('equipos.index'); // esto es lo mismo que return $this->index();
       
    }
    public function edit(Equipo $equipo){

        return view('equipos.edit', compact('equipo'));
        
    }
    public function update(Request $request, Equipo $equipo){
        $request->validate([
            'name' => 'required|unique:equipos',
            'campo' => 'required',
           ]);

        $equipo->name = $request->name;
        $equipo->campo = $request->campo;
        $equipo->save();

        return redirect()->route('equipos.index');
    }
    public function destroy(Equipo $equipo){
        //metodo encargado de eliminar
        $equipo->delete();
        
        return view('equipos');
    }

}
