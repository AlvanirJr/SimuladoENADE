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
			Email:<input type="text" name="email" value="{{$usuario->email}}"  />
			Senha: <input type="text" name="senha" value="{{$usuario->senha}}" />
			Nome:<input type="text" name="nome" value="{{$usuario->nome}}" />
			Curso:
			<select name="curso_id"  value="{{$usuario->curso_id}}" >
				@foreach ($cursos as $curso)
				<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
				@endforeach
			</select>
			TipoUsuario: 
			<select name="tipo_usuario_id" value="{{$usuario->tipo_usuario_id}}" >
				@foreach ($tipos_usuario as $tipo_usuario)
				<option value="{{$tipo_usuario->id}}">{{$tipo_usuario->tipo}}</option>
				@endforeach
			</select>
			<input type="submit" value="atualizar"  />
		</form>
	</body>
</html>