@extends('layouts.plantilla')

@section('title', 'Liguilla')

@section('content')

    <h1>Bienvenidos a nuestra liguilla!!!!</h1>
        <h3> Desde aqui podras acceder tanto a los equipos como a los partidos a traves de dos botones </h3>
            <br>
    <a href="{{route('equipos.index')}}"> Ver Equipos</a>
            <br>
    <a href="{{route('partidos.index')}}"> Ver Partidos</a>

@endsection

