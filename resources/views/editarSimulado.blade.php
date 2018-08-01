@extends('layouts.default')
@section('content')
    
	<h1>editar Simulados</h1><br><br>
	<form action = "/atualizar/simulado" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$simulado->id}}">
		Descrição Simulado: <input type="text" name="descricao_simulado" value="{{$simulado->descricao_simulado}}" />	
		<input type="submit" value="atualizar"/>
	</form>
@stop