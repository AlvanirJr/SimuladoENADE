@extends('layouts.default')
@section('content')
	<h1>Cadastrar Disciplina</h1><br><br>
	<form action = "/adicionar/Disciplina" method = "post">
		
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<div>
			Nome: <input type="text" name="nome" required/>	
			@if($errors->has('nome'))
			<span class="help-block">
				<strong>{{$errors->first('nome')}}</strong>
			</span>
			@endif
		</div>
		 


		<div>
		Curso ID: 
		 <select name="curso_id" required>
		 	@foreach ($cursos as $curso)
		  	<option value="{{$curso->id}}"> {{$curso->curso_nome}}</option>
		  	@endforeach  	
			@if($errors->has('curso_id'))
			<span class="help-block">
			<strong>{{$errors->first('curso_id')}}</strong>
			</span>
			@endif
		</select> 

		</div>
		<input type='submit' value='cadastrar'/>
	</form>
@stop