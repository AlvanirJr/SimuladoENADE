@extends('layouts.default')
@section('content')
	<h1>Cadastrar Disciplina</h1><br><br>
	<form action = "/adicionar/Disciplina" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Nome: <input type="text" name="nome" />	

		 <select name="curso_id">
		 	@foreach ($cursos as $curso)
		  	<option value="{{$curso->id}}"> {{$curso->curso_nome}}</option>
		  	@endforeach
			</select> 
			
		<input type='submit' value='cadastrar'/>
	</form>
@stop