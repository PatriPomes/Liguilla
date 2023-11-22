@extends('layouts.plantilla')

@section('title', 'Creando Partidos')

@section('content')

<div class="mx-auto max-w-4xl p-4">

  <h2 class="font-[Acme] text-4xl font-bold mb-4 text-center">Jugamos??? En este espacio puedes crear los partidos necesarios para la liguilla!!!</h2>

  <form action="{{ route('partidos.store') }}" method="POST" class="mb-8">
    @csrf

    <label class="block mb-4 ">
      <span class="text-lg font-bold">Fecha del partido:</span>
      <input type='date' name='fecha_partido' value='{{ old('fecha_partido', $partido->fecha_partido ?? '') }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>
    @error('fecha_partido')
      <div class="text-black-500 mb-4">
        *{{ $message }}
      </div>
    @enderror

    <label class="block mb-4">
      <span class="text-lg font-bold">Hora del partido:</span>
      <input type='time' name='hora_partido' value='{{ old('hora_partido', $partido->hora_partido ?? '') }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>
    @error('hora_partido')
      <div class="text-black-500 mb-4">
        *{{ $message }}
      </div>
    @enderror

    <label class="block mb-4">
      <span class="text-lg font-bold">Campo:</span>
      <select name='campo' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        <option value='pendiente' selected>Pendiente</option>
        <option value='local'>Local</option>
        <option value='visitante'>Visitante</option>
      </select>
    </label>
    @php
    $equipos = App\Models\Equipo::all();
  @endphp
    <label class="block mb-4">
      <span class="text-lg font-bold">Equipo local:</span>
      <select name='equipo_local_id' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        @foreach ($equipos as $equipo)
          <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
        @endforeach
      </select>
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Goles Local:</span>
      <input type='number' name='goles_local' value='' min='0' placeholder='-' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Goles Visitante:</span>
      <input type='number' name='goles_local' value='' min='0' placeholder='-' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Equipo visitante:</span>
      <select name='equipo_visitante_id' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        @foreach ($equipos as $equipo)
          <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
        @endforeach
      </select>
    </label>

    @error('equipo_visitante_id')
      <div class="text-black-500 mb-4">
        *{{ $message }}
      </div>
    @enderror

    <button type="submit" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-xl">
      Añadir Partido
    </button>
    <br>
    <br>
    <a href="{{ route('partidos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-xl">
      Volver a Partidos
    </a>
    
  </form>

</div>

@endsection
    