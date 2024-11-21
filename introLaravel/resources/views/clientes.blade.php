@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido2')

    {{-- Finaliza Navbar--}}
    
    {{-- Mensaje de alerta actualizacion datos --}}
@session('actualizado')
    <script>
        Swal.fire({
        title: "Exito",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
@endsession

<div class="container mt-5 col-8">
        @foreach ($clientes as $cliente)
{{--Inicia tarjeraCliente--}}
<div class="card">
    <div class="card-header fs-5 text font-monospace">
        {{$cliente->nombre}}
    </div> <!-- Finaliza card-header -->
    <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <h5 class="fw-medium">{{$cliente->telefono}}</h5>
        <p class="card-text fw-lighter"></p>
</div> <!-- Finaliza card-body -->
    <div class="card-footer text-muted">
        {{--aqui se coloca el modal para abrir el fomr de edicion--}}
        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update{{$cliente->id}}">Actualizar</button>
        {{--aqui se coloca el boton eliminacion--}}
        <form action="{{ route('rutaeliminar', $cliente->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm btnEliminar" onclick="return confirm('Deseas eliminar el registro?')">Eliminar</button>
            </form>
        </div> <!-- Finaliza card-footer -->
    </div><!-- Finaliza card -->
</div> <!-- Finaliza container -->
{{-- Modal para editar --}}
<div class="modal fade" id="update{{$cliente->id}}" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('rutaactualizar', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="txtnombre" value="{{ $cliente->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="txtapellido" value="{{ $cliente->apellido }}">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="txtcorreo" value="{{ $cliente->correo }}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="txttelefono" value="{{ $cliente->telefono }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach


@session('eliminar')
    <script>
{{-- Confirmación para eliminar --}}
        Swal.fire({
        title: "Exito",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
@endsession

@endsection