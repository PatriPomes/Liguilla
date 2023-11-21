@extends('layouts.plantilla')

@section('title', 'Liguilla')

@section('content')

<div class="flex flex-col items-center justify-center h-screen">

    <h1 class="font-['Acme'] text-5xl font-bold ">
        Bienvenidos a nuestra liguilla!!!!</h1>
        <h3 class="font-['Acme'] text-3xl font-bold "> Desde aqui podras acceder tanto a los equipos como a los partidos a traves de dos botones </h3>
            <br>
            <a href="{{ route('equipos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-2xl font-bold">
                Ver Equipos
              </a>
            <br>
            <a href="{{ route('partidos.index') }}" class="inline-block bg-gray-300 text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue active:bg-blue-800 text-2xl font-bold">
                Ver Partidos
              </a>
    
</div>
@endsection

