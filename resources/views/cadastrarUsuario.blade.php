<!doctype html>
<html lang="{{app()->getLocale()}}">
	<head>
	<title> Cadastro de Usuario </title>
	</head>
	<body>
		<h1> Cadastrar Usuario </h1>
		<form action= "/adcionar/usuario" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			Nome:<input type="text" name="nome"/>
			Cpf: <input type="text" name="cpf"                       />
			Senha:<input type="text" name="senha"/>
			Email:<input type="text" name="email"/>
			Curso:<input type="integer" name="curso_id">
			TipoUsuario<input type="integer" name="tipo_usuario_id">


			



			<input type="submit" name="cadastrar"/>
			</form>
	</body>
</html>