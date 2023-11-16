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
            @foreach ($partidos as $partido)    
            <li>{{$partido->fecha_partido}} {{$partido->hora_partido}} {{$partido->campo}} 
                {{$partido->equipo_local->name}} {{$partido->goles_local}} {{$partido->goles_visitante}} {{$partido->equipo_visitante->name}}</li>
            @endforeach
        </ul>
            {{$partidos->links()}}
      <!--   INICIO CREAR-->
    <form action="{{route('partidos.create')}}" method="POST">
        @csrf
        <label> Fecha_partido:
            <input type='date' name='fecha_partido'>
         </label>
         <label> Hora_partido:
            <input type='time' name='hora_partido'>
          </label>
          <label> Campo:
            <select name='campo'>
              <option value='pendiente' selected>Pendiente</option>
              <option value='local'>Local</option>
              <option value='visitante'>Visitante</option>
            </select>
           </label>

           {{-- <label> Equipo local:
            <select name='equipo_local_id'>
              @foreach ($equipos as $equipo)
                <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
              @endforeach
            </select> 
            </label> --}}

            <label>Goles Local:
                <input type='number' name='goles_local'>
               </label>
           </label>
           <label>Goles Visitante:
            <input type='number' name='goles_visitante'>
           </label>
       </label>
           {{-- <label> Equipo visitante:
            <select name='equipo_visitante_id'>
              @foreach ($equipos as $equipo)
                <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
              @endforeach
            </select>
           </label> --}}
        <br> 
        <button type="submit"> Añadir Partido </button>
    </form>
    <!--FIN CREAR-->
    <h3>De la misma manera podras acceder a todas las funciones para la gestion de los mismaos</h3>
        <ul>
            <li>Añadir nuevos partidos</li>
            <li>Editar la informacion existente</li>
            <li>Eliminar partidos que ya no se realizaran</li>
        </ul>
</body>
</html>