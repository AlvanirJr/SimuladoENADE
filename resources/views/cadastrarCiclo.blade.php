@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Ciclos</h1><br><br>
	<form action = "/adicionar/ciclo" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Nome: <input type="text" name="tipo_ciclo" />		
		<input type="submit" value="cadastrar"/>
	</form>
@stop