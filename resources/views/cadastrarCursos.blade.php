@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Cursos</h1><br><br>
	<form action = "/adicionar/Cursos" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		
		Ciclo: <select name="ciclo_id" >
			@foreach ($ciclos as $ciclo)
			<option value="{{$ciclo->id}}">{{$ciclo->tipo_ciclo}}</option>
			@endforeach
		</select>
		Nome: <input type="text" name="curso_nome" />	
				
		<input type="submit" value="cadastrar"/>
	</form>
@stop