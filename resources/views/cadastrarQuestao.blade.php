@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Questao</h1><br><br>
	<form action = "/adicionar/questao" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Enuciado: <input type="text" name="enuciado" />	
		Alternativa_a<input type="text" name="alternativa_a">
		Alternativa_b<input type="text" name="alternativa_b">
		Alternativa_c<input type="text" name="alternativa_c">
		Alternativa_d<input type="text" name="alternativa_d">
		Alternativa_e<input type="text" name="alternativa_e">	
		Alternativa_correta<input type="text" name="alternativa_correta">
		Dificuldade<input type="number" name="dificuldade">


		<!--Dificuldade  <select name="dificuldade">
    				 <option value= "1" >Nivel 1</option>
   					 <option value= "2">Nivel 2</option>
   					 <option value= "3">Nivel 3</option>
					 </select>-->

	


		Disciplina_id: 
		<select name="disciplina_id" >
			@foreach ($disciplinas as $disciplina)
			<option value="{{$disciplina->id}}">{{$disciplina->id}}</option>
			@endforeach
		</select>

		<input type="submit" value="cadastrar"/>
	</form>
@stop