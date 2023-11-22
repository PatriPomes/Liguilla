<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
    @vite('resources/css/app.css')
    {{-- fabicon
    estilos --}}
</head>
<body class="bg-green-200" >
    <!--header-->
    <div class="flex flex-col items-center justify-center h-screen">
    <!--nav-->
    @yield('content')    
    <!--footer-->
    <!--script-->
</div>
</body>
</html>