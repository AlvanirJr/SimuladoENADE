<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> cadastro de Curso </title>
	</head>
	<body>
		<h1>Cadastrar Curso</h1>
		<form action = "/adicionar/Curso" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			Nome do Curso: <input type="text" name="nome" />	
			Curso: <input type="integer" name="curso_id"/>
			<input type="submit" value="cadastrar"/>
		</form>
	</body>
</html> 