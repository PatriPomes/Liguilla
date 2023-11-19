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
         <br>
         <label> Hora_partido:
            <input type='time' name='hora_partido' value= '{{$partido->hora_partido}}'>
        </label>
          <br>
        <label> Campo:
            <select name='campo'>
              <option value='pendiente' selected>Pendiente</option>
              <option value='local'>Local</option>
              <option value='visitante'>Visitante</option>
            </select>
          </label>
          <br>
          <label> Equipo local:
            <select name='equipo_local_id'>
              @foreach ($equipos as $equipo)
              <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_local_id ? 'selected' : '' }}>{{ $equipo->name }}</option>
              @endforeach
            </select> 
          </label> 
          <br>
          <label>Goles Local:
            <input type='number' name='goles_local'value= '{{$partido->goles_local}}'>
          </label>
          <br>
          <label>Goles Visitante:
            <input type='number' name='goles_visitante' value= '{{$partido->goles_visitante}}'>
          </label>
          <br>
          <label> Equipo visitante:
            <select name='equipo_visitante_id'>
              @foreach ($equipos as $equipo)
              <option value='{{ $equipo->id }}' {{ $equipo->id == $partido->equipo_visitante_id ? 'selected' : '' }}>{{ $equipo->name }}</option>
              @endforeach
            </select>
          </label>
          @error('equipo_visitante_id')
            <br>
            <span>*{{$message}}</span>
            <br>
          @enderror
        <br>
            <br>
            <button type="submit"> Actualizar Partido </button>
        </form>
       

</body>
</html>