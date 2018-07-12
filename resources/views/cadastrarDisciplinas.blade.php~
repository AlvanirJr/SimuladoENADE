<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> cadastro de Disciplinas </title>
	</head>
	<body>
		<h1>Cadastrar Disciplina</h1>
		<form action = "/adicionar/Disciplina" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			Nome: <input type="text" name="nome" />	
			Curso: <input type="integer" name="curso_id"/>
			<input type="submit" value="cadastrar"/>
		</form>
	</body>
</html>