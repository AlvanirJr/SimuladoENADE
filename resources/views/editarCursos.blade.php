<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> editar Curso </title>
	</head>
	<body>
		<h1>editar Curso</h1>
		<form action = "/atualizar/Curso" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			<input type = "hidden" name="id" value="{{$disciplina->id}}">
			Nome do Curso: <input type="text" name="nome" />	
			Curso: <input type="integer" name="curso_id"/>
			<input type="submit" value="atualizar"/>
		</form>
	</body>
</html> 