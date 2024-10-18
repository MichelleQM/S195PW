<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
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
    <div class="card text-center full-height">
    <center>
            <img src="{{asset('imagenes/logo.png')}}" alt="Univerdad Politecnica Queretaro" style="max-width: 25%; height: auto;" class="card-img-top">
    </center>
    <div class="card-body">
        <h5 class="card-title">Practica Repaso</h5>
        <p class="card-text">Michelle Wendolyn Quintero Moreno</p>
        <p class="card-text">Convertidor 16/10/2024</p>
        <p class="card-text">Programacion web: Ivan Isay Guerra Lopez</p>
        <a href="{{route('rutaconvertidor')}}" class="btn btn-primary">Convertidor</a>
    </div>
    </div>
</body>
</html>