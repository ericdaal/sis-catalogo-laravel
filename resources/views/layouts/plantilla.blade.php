<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a class="font-bold uppercase text-gray-900 text-sm" id='home' href='/'>
            <h1 class="text-3xl font-black uppercase">
                Catalogo
            </h1>
            </a>
            @if (auth()->user())
            <nav class="flex gap-2 items-center">
                <p class="p-3">Bienvenido usuario : {{ auth()->user()->name}} |</p>
                <a class="font-bold uppercase text-gray-900 text-sm" id='contact' href='/product'>Crear Producto |</a>
                <a class="font-bold uppercase text-gray-900 text-sm" id='link' href='/panel'>Panel de Información |</a>
                <a class="font-bold uppercase text-gray-900 text-sm" id='about' href='/login'>Cerrar Sesión |</a>
            </nav>
            @else
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-900 text-sm" id='about' href='/login'>Login |</a>
                <a class="font-bold uppercase text-gray-900 text-sm" id='about' href='/registro'>Crear Cuenta |</a>
            </nav>
            @endif
        </div>
    </header>
     <main class="container mx-auto ml-10">
        <h2 class="font-black text-center text-3xl mb-10 p-5">
            @yield('titulo')
        </h2>
            @yield('contenido')
     </main>
     <footer class="text-center p-5 text-gray-900 font-bold uppercase">
        Todos los derechos reservados {{ now()->year}}
     </footer>



