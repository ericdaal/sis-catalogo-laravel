<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="apple-touch-icon" href="{{asset('img/favicons/apple-touch-icon.png')}}" sizes="180x180">
        <link rel="icon" href="{{asset('img/favicons/favicon-32x32.png')}}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{asset('img/favicons/favicon-16x16.png')}}" sizes="16x16" type="image/png">
        <link rel="manifest" href="{{asset('js/manifest.json')}}">
        <link rel="mask-icon" href="{{asset('img/favicons/safari-pinned-tab.svg')}}" color="#712cf9">
        <link rel="icon" href="{{asset('img/favicons/favicon.ico')}}">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
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
                <p class="p-3">Bienvenido: {{ auth()->user()->name}} |</p>
                <a class="font-bold uppercase text-gray-900 text-sm" id='contact' href='/mantenimiento'>Mantenimiento |</a>
                <a class="font-bold uppercase text-gray-900 text-sm" id='link' href='/panel'>Panel de Control |</a>
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
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/feather.min.js')}}"></script>
        <script src="{{asset('js/Chart.min.js')}}"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
        Todos los derechos reservados {{ now()->year}}
     </footer>


