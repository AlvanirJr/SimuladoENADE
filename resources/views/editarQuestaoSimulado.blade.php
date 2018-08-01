@extends('layouts.default')
@section('content')
  
	<h1>Editar Questao Simulado</h1><br><br>
	<form action = "/atualizar/QuestaoSimulado" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		
		ID do Aluno:
		 <select name="questao_id">
		 	@foreach ($questaos as $questao)
		  	<option value="{{$questao->id}}"> {{$questao->id}}</option>
		  	@endforeach
			</select> 
		ID do Simulado:
		 <select name="simulado_id">
		 	@foreach ($simulados as $simulado)
		  	<option value="{{$simulado->id}}"> {{$simulado->id}}</option>
		  	@endforeach
			</select> 
		<input type="submit" value="atualizar"/>
	</form>
@stop