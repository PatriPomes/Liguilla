<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Jugamos??? En este espacio puedes crear los partidos necesarios para la liguilla!!!</h2>
    <!--INICIO CREAR-->
       
    <form action="{{route('partidos.store')}}" method="POST">
        @csrf
        @php
        $equipos = App\Models\Equipo::all();
        @endphp
        <label> Fecha_partido:
            <input type='date' name='fecha_partido'>
         </label>
         @error('fecha_partido')
            <br>
            <span>*{{$message}}</span>
            <br>
          @enderror
         <br>
         <label> Hora_partido:
            <input type='time' name='hora_partido'>
          </label>
          @error('hora_partido')
            <br>
            <span>*{{$message}}</span>
            <br>
          @enderror
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
              <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
              @endforeach
            </select> 
          </label> 
          <br>
          <label>Goles Local:
            <input type='number' name='goles_local' value='' min='0' placeholder='-'>
          </label>
          <br>
          <label>Goles Visitante:
            <input type='number' name='goles_local' value='' min='0' placeholder='-'>
          </label>
          <br>
           <label> Equipo visitante:
            <select name='equipo_visitante_id'>
              @foreach ($equipos as $equipo)
              <option value='{{ $equipo->id }}'>{{ $equipo->name }}</option>
              @endforeach
            </select>
          </label>
          @error('equipo_visitante_id')
            <br>
            <span>*{{$message}}</span>
            <br>
          @enderror
        <br>
        <button type="submit"> Añadir Partido </button>
       
    </form>
       

</body>
</html>