<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> Cadastro de ciclo </title>
	</head>
	<body>
		<h1>Cadastrar Ciclos</h1>
		<form action = "/adicionar/ciclo" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			Nome: <input type="text" name="tipo_ciclo" />		
			<input type="submit" value="cadastrar"/>
		</form>
	</body>
</html> 