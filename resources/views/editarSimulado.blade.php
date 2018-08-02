@extends('layouts.default')
@section('content')
    
	<h1>editar Simulados</h1><br><br>
	<form action = "/atualizar/simulado" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$simulado->id}}">
		Descrição Simulado: <input type="text" name="descricao_simulado"/>

	Curso:
		<select name="curso_id">
			@foreach ($cursos as $curso)
			<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
			@endforeach
		</select>

	Usuario:
		<select name="usuario_id">
			@foreach($usuarios as $usuario)
			<option value="{{$usuario->id}}">{{$usuario->id}}</option> 
			@endforeach
		 </select>


		
		<input type="submit" value="atualizar"/>
	</form>
@stop