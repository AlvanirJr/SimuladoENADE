@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Simulados</h1><br><br>
	<form action = "/adicionar/simulado" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Descrição: <input type="text" name="descricao_simulado" />		
		<input type="submit" value="cadastrar"/>
	</form>
@stop