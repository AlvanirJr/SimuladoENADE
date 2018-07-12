<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> editar Curso </title>
	</head>
	<body>
		<h1>editar Curso</h1>
		<form action = "/atualizar/Cursos" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$curso->id}}">
			Nome do Curso: <input type="text" name="curso_nome" />	
			ciclo: <input type="integer" name="ciclo_id"/>
			<input type="submit" value="atualizar"/>
		</form>
	</body>
</html> 