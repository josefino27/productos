@extends('plantilla')

@section('contenido')
<h1>Productos</h1>

<ol>
@forelse ($productos as $itemproductos)
<li>{{$itemproductos['nombre']}}</li>
@empty
<li>No hay productos...</li>
@endforelse
</ol>

@endsection