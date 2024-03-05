<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mensae nuevo</title>
</head>
<body>
	<p>Nuevo mensaje de: {{$mensaje['nombre'] }} - {{$mensaje['correo'] }}</p>
	<p>Asunto: <strong>{{$mensaje['asunto'] }}</strong> </p>
	<p>{{$mensaje['mensaje'] }}</p>
</body>
</html>