<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> editar Disciplina </title>
	</head>
	<body>
		<h1>editar Disciplina</h1>
		<form action = "/atualizar/Disciplina" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			<input type = "hidden" name="id" value="{{$disciplina->id}}">
			Nome: <input type="text" name="nome" />	
			Curso: <input type="integer" name="curso_id"/>
			<input type="submit" value="atualizar"/>
		</form>
	</body>
</html>