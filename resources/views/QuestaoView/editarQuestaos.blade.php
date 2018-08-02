@extends('layouts.default')
@section('content')
    
	<h1>Editar Questao</h1><br><br>
	<form action= "/atualizar/questao" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$questao->id}}">
		Enuciado: <input type="text" name="enuciado" value="{{$questao->enuciado}}" />	
		Alternativa_a<input type="text" name="alternativa_a" value="{{$questao->alternativa_a}}" >
		Alternativa_b<input type="text" name="alternativa_b" value="{{$questao->alternativa_b}}" >
		Alternativa_c<input type="text" name="alternativa_c" value="{{$questao->alternativa_c}}" >
		Alternativa_d<input type="text" name="alternativa_d" value="{{$questao->alternativa_d}}" >
		Alternativa_e<input type="text" name="alternativa_e" value="{{$questao->alternativa_e}}" >	
		Alternativa_correta<input type="text" name="alternativa_correta" value="{{$questao->alternativa_correta}}" >
		Dificuldade  <input type="number" name="dificuldade" value="{{$questao->dificuldade}}" >
		Disciplina_id: 
		<select name="disciplina_id" value="{{$questao->disciplina_id}}" >
			@foreach ($disciplinas as $disciplina)
			<option value="{{$disciplina->id}}">{{$disciplina->id}}</option>
			@endforeach
		</select>
		<input type="submit" value="atualizar"  />
	</form>
@stop