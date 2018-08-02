@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Simulados</h1><br><br>
	<form action = "/adicionar/simulado" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Descrição: <input type="text" name="descricao_simulado" />

		Curso:
		<select name="curso_id" >
			@foreach ($cursos as $curso)
			<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
			@endforeach
		</select>

		Usuario:
		<select name="usuario_id" >
			@foreach ($usuarios as $usuario)
			<option value="{{$usuario->id}}">{{$usuario->nome}}</option>
			@endforeach
		</select>

		<input type="submit" value="cadastrar"/>
	</form>
@stop