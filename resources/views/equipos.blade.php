@extends('layouts.plantilla')

@section('title', 'Equipos')

@section('content')

<h2>Pagina principal de los equipos participantes, aqui podras ver el listado de todos nuestros equipos</h2>
       
<form action="{{ route('equipos.create') }}" method="POST">
    @csrf

    <label>
        Equipo:
        <input type='text' name='name'>
    </label>
    @error('name')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
        <br>

    <label>
        Campo:
        <input type='text' name='campo'>
    </label>
    @error('campo')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
        <br>
    <button type="submit"> Añadir Equipo </button>
</form>

<ul>  

    <h5>EQUIPO      CAMPO</h5>
        @php
            $equipos = App\Models\Equipo::all();
        @endphp

    @foreach ($equipos as $equipo)    
        <li>{{$equipo->name}} {{$equipo->campo}} 
            <a href="{{route('equipos.edit', ['equipo' => $equipo->id]) }}">Editar</a>
            <form action='{{route('equipos.destroy', $equipo)}}' method="POST">
                @csrf
                @method('delete')
                <button type="submit"> Eliminar</button>
            </form>
        </li>
    @endforeach
</ul> 
    <br>
<a href="{{route('partidos.index')}}"> Ver Partidos</a>

@endsection

