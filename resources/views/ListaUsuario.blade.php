<!doctype html>
<html lang="{{app()->getLocale()}}">
	<head>
	<title>Listar Usuarios</title>
	</head>
	<body>
		<table border='1'>
		@foreach($usuarios as $usuario)
			<tr>
				<td>{{$usuario->nome}}</td>
				<td>{{$usuario->cpf}}</td>
				<td>{{$usuario->senha}}</td>
				<td>{{$usuario->email}}</td>
				<td>{{$usuario->curso_id}}</td>
				<td>{{$usuario->tipo_usuario_id}}</td>
				

				<td>{{$usuario->id}}</td>

				<td> <a href='/editar/usuario/{{$usuario->id}}'>Editar</a> - <a href='/remover/usuario/{{$usuario->id}}'>Remover</a></td>
			</tr>
			@endforeach
		
	
		
		</table>
		<a href="/cadastrar/usuario"> Inserir novo </a>
	</body>
</html>