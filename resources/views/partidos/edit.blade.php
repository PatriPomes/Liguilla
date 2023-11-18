<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Que deseas modificar???</h2>
    <!--INICIO CREAR-->
       
        <form action="{{route('partidos.update', $partido)}}" method="post">
            @csrf
            @method('put')
            @php
            $equipos = App\Models\Equipo::all();
        @endphp
        <label> Fecha_partido:
            <input type='date' name='fecha_partido' value= '{{$partido->fecha_partido}}'>
         </label>
         <label> Hora_partido:
            <input type='time' name='hora_partido' value= '{{$partido->hora_partido}}'>
          </label>

          <label> Campo:
            <select name='campo'>
              <option value='pendiente' selected>Pendiente</option>
              <option value='local'>Local</option>
              <option value='visitante'>Visitante</option>
            </select>
          </label>

          <label> Equipo local:
            <select name='equipo_local_id'>
              @foreach ($equipos as $equipo)
              <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_visitante_id ? 'disabled' : '' }}>{{ $equipo->name }}</option>
              @endforeach
            </select> 
          </label> 

          <label>Goles Local:
            <input type='number' name='goles_local'value= '{{$partido->goles_local}}'>
          </label>

          <label>Goles Visitante:
            <input type='number' name='goles_visitante' value= '{{$partido->goles_visitante}}'>
          </label>
       
           <label> Equipo visitante:
            <select name='equipo_visitante_id'>
              @foreach ($equipos as $equipo)
              <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_local_id ? 'disabled' : '' }}>{{ $equipo->name }}</option>
              @endforeach
            </select>
          </label>
        <br>
            <br>
            <button type="submit"> Actualizar Partido </button>
        </form>
       

</body>
</html>