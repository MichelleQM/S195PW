<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])

    <style>
        body, html {
            height:100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div style="display: flex; justify-content: center; aling-items: center; height: 100hv; text-aling:center;">
        <div>
            <h1 class="display-1">Bienvanido Turista!</h1>
            <p>Presiona el boton para inicias...</p>

            <a href="{{route('rutaformulario')}}" class="btn btn-primary">Ir al registro</a>
            <a href="/formulario" class="btn btn-danger">i al regitro</a> 
    </style>
    </div>
</body>
</html>