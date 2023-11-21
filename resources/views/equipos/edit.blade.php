@extends('layouts.plantilla')

@section('title', 'Editando Equipos')

@section('content')

<h2>Que deseas modificar???</h2>
           
    <form action="{{route('equipos.update', $equipo)}}" method="post">
        @csrf
        @method('put')

        <label>
            Equipo:
            <input type='text' name='name' value='{{$equipo->name}}'>
        </label>
            @error('name')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror
        <label>
            Campo:
            <input type='text' name='campo' value='{{$equipo->campo}}'>
        </label>
            @error('campo')
                <br>
                <span>*{{$message}}</span>
                <br>
            @enderror
                <br>
        <button type="submit"> Actualizar Equipo </button>

    </form>

    <a href="{{route('equipos.index')}}"> Volver a Equipos</a>

@endsection

