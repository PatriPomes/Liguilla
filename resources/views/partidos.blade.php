<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script> 
    <title>Document</title>
</head>
<body>
<h2>Pagina principal de los partidos de nuestra liguilla, aqui podras ver la informacion de cada convocatoria!!</h2>
   
        <ul>
            <h5>FECHA DEL PARTIDO HORA DEL PARTIDO CAMPO GOLES LOCAL GOLES VISITANTE EQUIPO LOCAL EQUIPO VISITANTE</h5>
            @php
            $partidos = App\Models\Partido::all();
        @endphp
            @foreach ($partidos as $partido)    
            <li>{{ \Carbon\Carbon::parse($partido->fecha_partido)->format('d-m-y') }} {{ date('H:i', strtotime($partido->hora_partido)) }} {{$partido->campo}} 
                {{$partido->equipo_local->name}} {{$partido->goles_local}}-{{$partido->goles_visitante}} {{$partido->equipo_visitante->name}}
                <a href="{{route('partidos.edit', ['partido' => $partido->id]) }}">Editar</a>
                <form action='{{route('partidos.destroy', $partido)}}' method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit"> Eliminar</button>
                </form>
            </li>
            @endforeach
        </ul>
            {{-- {{$partidos->links()}} --}}
        <a href="{{route('partidos.create')}}"> Nuevo Partido</a>
        <br>
        <a href="{{route('equipos.index')}}"> Ver Equipos</a>
        
  
</body>
</html>