<!doctype html>
<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> Lista de ciclo </title>
	</head>
	<body>
		<table border='1' >
			@foreach ($ciclos as $ciclo)
				<tr>				
					<td>{{$ciclo->tipo_ciclo}}</td>
					<td>{{$ciclo->ciclo_id}}</td>
					<td> <a href="/editar/ciclo/{{$ciclo->id}}">Editar</a> 
					<td> <a href="/remover/ciclo/{{$ciclo->id}}">Remover</a></td>
				</tr>			
			@endforeach		
		</table>
		<a href="/cadastrar/ciclo"> Adicionar um ciclo</a>
	</body>
</html> 