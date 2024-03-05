@extends('plantilla')


@section('contenido')
<h1>@lang('Contact')</h1>
	
	<form method="POST" action="{{ route('contacto') }}">

		@csrf
		
		<input type="text" name="nombre" value="Jose David Nuñez">
		{!!$errors->first('nombre','<span style="color:red">:message</span>')!!}
		<br>
		<input type="text" name="correo" value="pecesito1@gmail.com">
		{!!$errors->first('correo','<span style="color:red">:message</span>')!!}
		<br>
		<input type="text" name="asunto" value="asesoria">
		{!!$errors->first('asunto','<span style="color:red">:message</span>')!!}
		<br>
		<textarea name="mensaje">Eeste es un mensaje de prueba</textarea>
		{!!$errors->first('mensaje','<span style="color:red">:message</span>')!!}
		<br>
		<button>@lang('Send')</button>
		
	</form>

@endsection