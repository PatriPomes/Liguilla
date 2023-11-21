@extends('layouts.plantilla')

@section('title', 'Equipos')

@section('content')

<div class="mx-auto max-w-4xl p-4">

  <h2 class="font-[Acme] text-4xl font-bold mb-4 text-center">Página principal de los equipos participantes, aquí podrás ver el listado de todos nuestros equipos</h2>

  <form action="{{ route('equipos.create') }}" method="POST" class="mb-8">
    @csrf

    <label class="block mb-2 text-xl font-bold">
      Equipo:
      <input type='text' name='name' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>
    @error('name')
      <div class="text-black-500 mb-2">
        *{{$message}}
      </div>
    @enderror

    <label class="block mb-2 text-xl font-bold">
      Campo:
      <input type='text' name='campo' class="w-full border rounded-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
    </label>
    @error('campo')
      <div class="text-black-500 mb-2">
        *{{$message}}
      </div>
    @enderror

    <button type="submit" class="bg-gray-300 text-gray-800 py-2 px-4 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300 text-xl">
      Añadir Equipo
    </button>
  </form>

  <table class="w-full border rounded">
    <thead>
      <tr class="bg-gray-100">
        <th class="py-2 px-4 border-b text-center text-xl">EQUIPO</th>
        <th class="py-2 px-4 border-b text-center text-xl">CAMPO</th>
        <th class="py-2 px-4 border-b text-center text-xl">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      @php
        $equipos = App\Models\Equipo::all();
      @endphp
  
      @foreach ($equipos as $index => $equipo)
        <tr class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-green-50' }}">
          <td class="py-2 px-4 border-b text-center text-xl">{{ $equipo->name }}</td>
          <td class="py-2 px-4 border-b text-center text-xl">{{ $equipo->campo }}</td>
          <td class="py-2 px-4 border-b text-center">
            <a href="{{ route('equipos.edit', ['equipo' => $equipo->id]) }}" class="inline-block bg-gray-300 text-gray-800 py-1 px-2 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300 text-xl">
              Editar
            </a>
            <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" class="inline ml-2">
              @csrf
              @method('delete')
              <button type="submit" class="bg-gray-300 text-gray-800 py-1 px-2 rounded-full hover:bg-gray-600 hover:text-white focus:outline-none focus:ring focus:border-blue-300 transition duration-300 text-xl">Eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
    <br>
    <a href="{{ route('partidos.index') }}" class="inline-block bg-gray-300 text-gray-800   hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-xl">
      Ver Partidos
    </a>

</div>

@endsection

