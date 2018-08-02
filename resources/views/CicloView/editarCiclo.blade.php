@extends('layouts.default')
@section('content')
    
	<h1>editar Ciclos</h1><br><br>
	<form action = "/atualizar/ciclo" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$ciclo->id}}">
		Tipo do Ciclo: <input type="text" name="tipo_ciclo" value="{{$ciclo->tipo_ciclo}}" />	
		<input type="submit" value="atualizar"/>
	</form>
@stop