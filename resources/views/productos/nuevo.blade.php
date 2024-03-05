@extends('plantilla')

@section('contenido')
<h1>Formulario de registro</h1>
<form method="POST" action="{{ url('/productos') }}" enctype="multipart/form-data">

		@csrf
		<div class="form-row">
			<div class="col">
				<label for="nombre" >{{'Nombre'}}</label>
				<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
				{!!$errors->first('nombre','<span style="color:red">:message</span>')!!}
			</div>
			<div class="col">	
				<div class="form-row">
				<label for="precio" >{{'Precio'}}</label>
				<input class="form-control" type="number" name="precio" value="{{old('precio')}}">
				{!!$errors->first('precio','<span style="color:red">:message</span>')!!}
			</div>
	</div>
		<div class="form-row">
		<label for="descripcion" >{{'Descripcion'}}</label>
		<input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}">
		{!!$errors->first('descripcion','<span style="color:red">:message</span>')!!}
		</div>
		<div class="form-row">
		<label for="foto" >{{'Imagen del producto'}}</label>
		<input class="form-control" type="file" name="foto" value="{{old('foto')}}">
		{!!$errors->first('foto','<span style="color:red">:message</span>')!!}
		</div>
		<hr>
		<div class="form-row">
			<button class="btn btn-success">@lang('Send')</button>
		</div>
		
		
	</form>

	@endsection
