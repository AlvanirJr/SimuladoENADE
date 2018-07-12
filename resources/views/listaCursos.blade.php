<!doctype html>
<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> Lista de Cursos </title>
	</head>
	<body>
		<table border='1' >
			@foreach ($cursos as $curso)
				<tr>				
					<td>{{$curso->nome_curso}}</td>
					<td>{{$curso->curso_id}}</td>
					<td> <a href="/editar/Curso/{{$curso->id}}">Editar</a> 
					<td> <a href="/remover/Curso/{{$curso->id}}">Remover</a></td>
				</tr>			
			@endforeach		
		</table>
		<a href="/cadastrar/Curso"> Adicionar um Curso</a>
	</body>
</html> 