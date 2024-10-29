<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

{{--Inicia barra de navegacion--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
        <a class="navbar-brand" href="{{route('rutainicio')}}">Turista sin Maps</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('rutaformulario')?'text-warning':''}}" aria-current="page" href="{{route('rutaformulario')}}">{{ __('Registro clientes')}}</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('rutaclientes')?'text-primary':''}}" href="{{route('rutaclientes')}}">{{ __('Consultar clientes')}}</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

{{--termina barra de navegacion--}}

@yield('contenido1'){{--Indica que ahi es en donde se va a colocar el contenido que se desea mostrarSS--}}
@yield('contenido2')
@yield('contenido')

</body>
</html>