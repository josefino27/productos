@extends('plantilla')

@section('contenido')
<h1>Productos</h1>
<table class="table caption-top">
  <caption>Lista de prodcutos</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>

@forelse($productos as $p)

    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><img src="{{asset('storage').'/'.$p->foto}}" width="50px"></td>
      <td>{{$p->nombre}}</td>
      <td>{{$p->precio}}</td>
      <td>
      	<a class="btn btn-primary" href="{{url('/productos/'.$p->id.'/editar')}}" >Editar</a>
      	<br><br>
      	      	<form method="POST"action="{{url('/productos/'.$p->id)}}">
      		@csrf
      		@method('DELETE')
      		<button class="btn btn-danger" type="submit" onclick="return confirm('Realmente desea eliminar el registro?')">Borrar</button>
      	</form>
      </td>
    </tr>
    @empty
    <tr>
    	<td colspan="5">No hay productos...</td>
    </tr>
    @endforelse
  </tbody>
</table>
	@endsection
