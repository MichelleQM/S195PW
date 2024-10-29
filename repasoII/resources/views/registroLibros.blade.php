@extends ('layouts.plantilla1')
@section('titulo', 'Portada')
@section('contenido2')

<div class="container mt-5 col-6">
<div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
        Registro de Libros
    </div>

    <div class="card-body text-justify">
        <form action="/enviar" method="POST">
            @csrf

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control" name="txtisbn">
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="txttitulo">
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="txtautor">
        </div>

        <div class="mb-3">
            <label for="paginas" class="form-label">Paginas</label>
            <input type="number" class="form-control" name="txtpaginas">
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="date" class="form-control" name="txtanio">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Editorial</label>
            <input type="text" class="form-control" name="txtemail">
        </div>

        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="txteditorial">
        </div>
    </div>
</div> <!--termina contenedor-->
    <div class="card-footer text-muted">
        <div class="d-grid gap-2 mt-5 mb-3">
            <button type="submit" class="btn btn-outline-info btn-sm">Guardar Cliente</button>
        </form>
    </div>
    </div>
</div>
@endsection


