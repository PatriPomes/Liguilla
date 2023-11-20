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
            <label>
                Campo:
                <input type='text' name='campo'>
            </label>
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
    <!--FIN -->

    <h3>De la misma manera podras acceder a todas las funciones para la gestion de los mismos</h3>
        <ul>
            <li>Añadir nuevos equipos</li>
            <li>Editar la informacion existente</li>
            <li>Eliminar equipos que ya no desean participar</li>
        </ul>
</body>
</html>