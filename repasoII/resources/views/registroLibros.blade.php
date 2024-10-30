@extends ('layouts.plantilla1')
@section('titulo', 'Portada')
@section('contenido2')

@if (session('mensaje'))
    <script>
        alertify.alert('Registro Exitoso', '{{ session('mensaje') }}', function(){
            alertify.success('Ok');
        });
    </script>
@endif


<div class="container mt-5 col-4">
<div class="card">
    <div class="card-header fs-5 text-center text-warning">
        Registro de Libros
    </div>

    <div class="card-body text-justify">
        <form action="/guardarLibros" method="POST">
            @csrf

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="number" class="form-control" name="txtisbn" value="{{old('txtisbn')}}">
            <small class="text-warning fst-italic">{{$errors->first('txtisbn')}}</small>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
            <small class="text-warning fst-italic">{{$errors->first('txttitulo')}}</small>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
            <small class="text-warning fst-italic">{{$errors->first('txtautor')}}</small>
        </div>

        <div class="mb-3">
            <label for="paginas" class="form-label">Paginas</label>
            <input type="number" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
            <small class="text-warning fst-italic">{{$errors->first('txtpaginas')}}</small>
        </div>

        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" name="txtanio" value="{{old('txtanio')}}">
            <small class="text-warning fst-italic">{{$errors->first('txtanio')}}</small>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Editorial</label>
            <input type="text" class="form-control" name="txtemail" value="{{old('txtemail')}}">
            <small class="text-warning fst-italic">{{$errors->first('txtemail')}}</small>
        </div>

        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}">
            <small class="text-warning fst-italic">{{$errors->first('txteditorial')}}</small>
        </div>
    </div>
</div> <!--termina contenedor-->
    <div class="card-footer text-muted">
        <div class="d-grid gap-2 mt-5 mb-3">
            <button type="submit" class="btn btn-outline-info btn-sm">Registrar Libro</button>
        </form>
    </div>
    </div>
</div>
@endsection


