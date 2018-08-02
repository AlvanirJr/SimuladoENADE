@extends('layouts.default')
@section('content')
	<h1>editar Curso</h1><br><br>
	<form action = "/atualizar/curso" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$curso->id}}">

		Nome do Curso: <input type="text" name="curso_nome"/>	

		Ciclo: <select name="ciclo_id">
			@foreach ($ciclos as $ciclo)
			<option value="{{$ciclo->id}}">{{$ciclo->tipo_ciclo}}</option>
			@endforeach
		</select>
		<input type="submit" value="atualizar"/>
	</form>
@stop