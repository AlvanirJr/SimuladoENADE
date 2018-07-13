<!doctype html>

<html lang= "{{ app()->getLocale() }}">
	<head>
		<title> editar Disciplina </title>
	</head>
	<body>
		<h1>editar Disciplina</h1>
		<form action = "/atualizar/Disciplina" method = "post">
			<input type = "hidden" name="_token" value="{{csrf_token()}}">
			<input type = "hidden" name="id" value="{{$disciplina->id}}">
			Nome: <input type="text" name="nome" />	
			
			<select name="curso_id" multiple>
			 	@foreach ($cursos as $curso)
			  	<option value="{{$curso->id}}"> {{$curso->curso_nome}}</option>
			  	@endforeach
			  	
  			</select>
			<input type="submit" value="atualizar"/>
		</form>
	</body>
</html>