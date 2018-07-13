
<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> Editar Ciclo </title>
	</head>
	<body>
		<h1>editar Ciclos</h1>
		<form action = "/atualizar/ciclo" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$ciclo->id}}">
			Tipo do Ciclo: <input type="text" name="tipo_ciclo" value="{{$ciclo->tipo_ciclo}}" />	
			<input type="submit" value="atualizar"/>
		</form>
	</body>
</html> 