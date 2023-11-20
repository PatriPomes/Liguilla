<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pagina principal de los equipos participantes, aqui podras ver el listado de todos nuestros equipos</h2>
    <!--INICIO CREAR-->
       
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
        
        <!--FIN CREAR-->
        <!--INICIO MOSTRAR-->
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
    <!--FIN -->

</body>
</html>