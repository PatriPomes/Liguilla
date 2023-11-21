@extends('layouts.plantilla')

@section('title', 'Editando Partidos')

@section('content')

<div class="mx-auto max-w-4xl p-4">

  <h2 class="font-[Acme] text-4xl font-bold mb-4 text-center">¿Qué deseas modificar?</h2>

  <form action="{{ route('partidos.update', $partido) }}" method="post" class="mb-8">
    @csrf
    @method('put')
    @php
      $equipos = App\Models\Equipo::all();
    @endphp

    <label class="block mb-4">
      <span class="text-lg font-bold">Fecha del partido:</span>
      <input type='date' name='fecha_partido' value='{{ $partido->fecha_partido }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Hora del partido:</span>
      <input type='time' name='hora_partido' value='{{ $partido->hora_partido }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Campo:</span>
      <select name='campo' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        <option value='pendiente' {{ $partido->campo == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
        <option value='local' {{ $partido->campo == 'local' ? 'selected' : '' }}>Local</option>
        <option value='visitante' {{ $partido->campo == 'visitante' ? 'selected' : '' }}>Visitante</option>
      </select>
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Equipo local:</span>
      <select name='equipo_local_id' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        @foreach ($equipos as $equipo)
          <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_local_id ? 'selected' : '' }}>{{ $equipo->name }}</option>
        @endforeach
      </select>
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Goles Local:</span>
      <input type='number' name='goles_local' value='{{ $partido->goles_local }}' min='0' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Goles Visitante:</span>
      <input type='number' name='goles_visitante' value='{{ $partido->goles_visitante }}' min='0' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Equipo visitante:</span>
      <select name='equipo_visitante_id' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
        @foreach ($equipos as $equipo)
          <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_visitante_id ? 'selected' : '' }}>{{ $equipo->name }}</option>
        @endforeach
      </select>
      @error('equipo_visitante_id')
        <span class="text-black-500">{{ $message }}</span>
      @enderror
    </label>

    <button type="submit" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300">
      Actualizar Partido
    </button>
  </form>

  <a href="{{ route('partidos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
    Volver a Partidos
  </a>

</div>

@endsection
