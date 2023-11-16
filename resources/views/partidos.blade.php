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
        <!--INICIO CREAR-->
    

        <!--FIN CREAR-->
        <!--INICIO MOSTRAR-->
        <ul>
            <h5>FECHA DEL PARTIDO HORA DEL PARTIDO CAMPO GOLES LOCAL GOLES VISITANTE EQUIPO LOCAL EQUIPO VISITANTE</h5>
            @foreach ($partidos as $partido)    
            <li>{{$partido->fecha_partido}} {{$partido->hora_partido}} {{$partido->campo}} 
            {{$partido->equipo_local->name}} {{$partido->goles_local}} {{$partido->goles_visitante}} {{$partido->equipo_visitante->name}}</li>
            @endforeach
        </ul>
            {{$partidos->links()}}
        <!--FIN MOSTRAR-->
        
    <h3>De la misma manera podras acceder a todas las funciones para la gestion de los mismaos</h3>
        <ul>
            <li>Añadir nuevos partidos</li>
            <li>Editar la informacion existente</li>
            <li>Eliminar partidos que ya no se realizaran</li>
        </ul>
</body>
</html>