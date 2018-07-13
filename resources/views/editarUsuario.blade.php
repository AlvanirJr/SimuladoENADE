<!doctype html>
<html lang="{{app()->getLocale()}}">
	<head>
	<title>Editar Usuario</title>
	</head>
	<body>
		<h1>Editar Usuario</h1>
		<form action= "/atualizar/usuario" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$usuario->id}}">
			Email:<input type="text" name="email"  />
			Senha: <input type="text" name="senha" />
			Curso:<input type="integer" name="curso_id"/>
			Nome:<input type="text" name="nome"/>
			TipoUsuario<input type="integer" name="tipo_usuario_id"/>
			<input type="submit" value="atualizar"  />
		</form>
		</body>
</html>