    @extends('layouts.plantilla1')
    @section('titulo', 'Componentes Blade') 
    @section('contenido')

    <x-Card encabezado="Hola S195"  titulo="titulo 1" textoBoton="Guardar"> Prueba Slot para contenido </x-Card>
    <x-Card encabezado="Prueba"  titulo="titulo 2" textoBoton="No Guardar"> Otra pruebaaaaaaa!!!! </x-Card>

    <x-Alert tipo="success"> Alert Verde</x-Alert>

    <x-Alert tipo="danger"> Alert Rojo</x-Alert>

@endsection
