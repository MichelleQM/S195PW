@extends('layouts.plantilla1')
@section('titulo','Clientes')
@section('contenido2')

    {{-- Finaliza Navbar--}}

    <div class="container mt-5 col-8">

    <div class="card-header fs-5 text font-monospace">
        Michelle Quintero
    </div>
    <div class="card-body">
        <h5 class="fw-bold"> ivan.guerra@outlook.com</h5>
        <h5 class="fw-medium">4424203836</h5>
        <p class="card-text fw-lighter"></p>

    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    </div>
    </div>
    {{--Finaliza tarjeraCliente--}}

</div>{{--divCantaner--}}
@endsection