<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> cadastro de Cursos </title>
	</head>
	<body>
		<h1>Cadastrar Cursos</h1>
		<form action = "/adicionar/Cursos" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			Ciclo: <input type="integer" name="ciclo_id"/>
			Nome: <input type="text" name="curso_nome" />	
					
			<input type="submit" value="cadastrar"/>
		</form>
	</body>
</html> 