<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
</head>
<body>
    @vite(['resources/js/app.js'])
    <center>
        <div class="container mt-5 col-6">
    <div class="card text-center">
        <div class="card-header">
            <h1>Convertidor de GB, MG Y TB</h1>
        </div>
        <div class="card-body">
            <h5 class="card-title">Convierte tus unidades</h5>
            <form action="{{route('rutaconvertir')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="cantidad">Cantidad a convertir:</label>
                    <input type="float" class="form-control" id="cantidad" name="cantidad">
                </div>
                <div class="form-group">
                    <label for="inicial">unidad conversion:</label>
                    <select class="form-control" id="inical" name="inicial">
                        <option value="MB">MG</option>
                        <option value="GB">GB</option>
                        <option value="TB">TB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="final">unidad a convertir:</label>
                    <select class="form-control" id="final" name="final">
                        <option value="MB">MG</option>
                        <option value="GB">GB</option>
                        <option value="TB">TB</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Convertir</button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            <!-- aqui mostrare el resultado -->
            @if (isset($conversion))
        <h2>Resultado: </h2>
        <p>{{ $cantidad }} {{ $inicial }} son {{ $conversion }} {{ $final }}</p>
            @endif
        </div>
    </div>
</div> <!-- cierre del contenedor -->
    </center>
</body>
</html>