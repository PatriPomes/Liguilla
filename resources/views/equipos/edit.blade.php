@extends('layouts.plantilla')

@section('title', 'Editando Equipos')

@section('content')

<div class="mx-auto max-w-4xl p-4">

  <h2 class="font-[Acme] text-4xl font-bold mb-4 text-center">¿Qué deseas modificar?</h2>

  <form action="{{ route('equipos.update', $equipo) }}" method="post" class="mb-8">
    @csrf
    @method('put')

    <label class="block mb-4">
      <span class="text-lg font-bold">Equipo:</span>
      <input type='text' name='name' value='{{ $equipo->name }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
      @error('name')
        <span class="text-black-500">{{ $message }}</span>
      @enderror
    </label>

    <label class="block mb-4">
      <span class="text-lg font-bold">Campo:</span>
      <input type='text' name='campo' value='{{ $equipo->campo }}' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
      @error('campo')
        <span class="text-black-500">{{ $message }}</span>
      @enderror
    </label>

    <button type="submit" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300">
      Actualizar Equipo
    </button>
  </form>

  <a href="{{ route('equipos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
    Volver a Equipos
  </a>

</div>

@endsection

