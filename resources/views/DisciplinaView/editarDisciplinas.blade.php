@extends('layouts.default')
@section('content')
  
	<h1>editar Disciplina</h1><br><br>
	<form action = "/atualizar/Disciplina" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<input type = "hidden" name="id" value="{{$disciplina->id}}">
		Nome: <input type="text" name="nome" value="{{$disciplina->nome}}" />	
		
		Curso:
		<select name="curso_id">
		 	@foreach ($cursos as $curso)
		  	<option value="{{$curso->id}}"> {{$curso->curso_nome}}</option>
		  	@endforeach
		  	
			</select>
		<input type="submit" value="atualizar"/>
	</form>
@stop