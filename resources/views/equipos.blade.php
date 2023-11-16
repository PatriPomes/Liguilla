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
    <a href=''> Añadir Equipo </a>

        <!--FIN CREAR-->
        <!--INICIO MOSTRAR-->
    
    <ul>
            
        <h5>EQUIPO      CAMPO</h5>
        @foreach ($equipos as $equipo)    
        <li>{{$equipo->name}} {{$equipo->campo}}</li>
        @endforeach
    </ul>
    <!--FIN MOSTRAR-->
    <h3>De la misma manera podras acceder a todas las funciones para la gestion de los mismos</h3>
        <ul>
            <li>Añadir nuevos equipos</li>
            <li>Editar la informacion existente</li>
            <li>Eliminar equipos que ya no desean participar</li>
        </ul>
</body>
</html>