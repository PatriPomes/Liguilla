@extends('layouts.plantilla')

@section('title', 'Partidos')
    
@section('content')

<div class="mx-auto max-w-5xl p-4">

  <h2 class="font-[Acme] text-4xl font-bold mb-4 text-center">Página principal de los partidos de nuestra liguilla, aquí podrás ver la información de cada convocatoria!!</h2>
   
  <table class="w-full border rounded text-xl">
    <thead>
      <tr class="bg-gray-100">
        <th class="py-2 px-4 border-b text-center">FECHA DEL PARTIDO</th>
        <th class="py-2 px-4 border-b text-center">HORA DEL PARTIDO</th>
        <th class="py-2 px-4 border-b text-center">CAMPO</th>
        <th class="py-2 px-4 border-b text-center">GOLES LOCAL</th>
        <th class="py-2 px-4 border-b text-center">GOLES VISITANTE</th>
        <th class="py-2 px-4 border-b text-center">EQUIPO LOCAL</th>
        <th class="py-2 px-4 border-b text-center">EQUIPO VISITANTE</th>
        <th class="py-2 px-4 border-b text-center">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($partidos as $partido)    
        <tr class="{{ $loop->even ? 'bg-white' : 'bg-green-50' }}">
          <td class="py-2 px-4 border-b text-center">
            {{ \Carbon\Carbon::parse($partido->fecha_partido)->format('d-m-y') }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ date('H:i', strtotime($partido->hora_partido)) }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ $partido->campo }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ $partido->goles_local }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ $partido->goles_visitante }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ $partido->equipo_local->name }} 
          </td>
          <td class="py-2 px-4 border-b text-center">
            {{ $partido->equipo_visitante->name }}
          </td>
          <td class="py-2 px-4 border-b text-center">
            <div class="flex items-center justify-center">
              <a href="{{ route('partidos.edit', ['partido' => $partido->id]) }}" class="inline-block bg-gray-300 text-gray-800 py-1 px-2 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300">
                Editar
              </a>
      
              <form action='{{ route('partidos.destroy', $partido) }}' method="POST" class="inline ml-2">
                @csrf
                @method('delete')
      
                <button type="submit" class="bg-gray-300 text-gray-800 py-1 px-2 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300">
                  Eliminar
                </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mt-4 text-3xl">
    {{ $partidos->links() }}
  </div>
  <br>
  <a href="{{ route('partidos.create') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-xl">
    Nuevo Partido
  </a>
  <br>
  <br>
  <a href="{{ route('equipos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-xl">
    Ver Equipos
  </a>

</div>

@endsection

