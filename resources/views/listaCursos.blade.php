<!doctype html>
<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> Lista de Cursos </title>
	</head>
	<body>
		<table border='1' >
			@foreach ($cursos as $curso)
				<tr>				
					<td>{{$curso->curso_nome}}</td>
					<td>{{$curso->ciclo_id}}</td>
					<td> <a href="/editar/Cursos/{{$curso->id}}">Editar</a> 
					<td> <a href="/remover/Cursos/{{$curso->id}}">Remover</a></td>
				</tr>			
			@endforeach		
		</table>
		<a href="/cadastrar/Cursos"> Adicionar um Curso</a>
	</body>
</html> 