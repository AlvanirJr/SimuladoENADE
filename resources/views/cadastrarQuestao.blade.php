@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Questao</h1><br><br>
	<form action = "/adicionar/questao" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		
		<div>
		Enuciado: <input type="text" name="enuciado" required />
			@if($errors->has('enuciado'))
			<span class="help-block">
			<strong>{{$errors->first('enuciado')}}</strong>
			</span>
			@endif
		</div>
		
		<div>
			Alternativa a: <input type="text" name="alternativa_a" required>
			@if($errors->has('alternativa_a'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_a')}}</strong>
			</span>
			@endif

		</div>
		

		<div>
			Alternativa b:<input type="text" name="alternativa_b" required>
			@if($errors->has('alternativa_b'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_b')}}</strong>
			</span>
			@endif

		</div>

		<div>
			Alternativa c: <input type="text" name="alternativa_c" required>
			@if($errors->has('alternativa_c'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_c')}}</strong>
			</span>
			@endif

		</div>

		<div>
			Alternativa d:<input type="text" name="alternativa_d" required>
			@if($errors->has('alternativa_d'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_d')}}</strong>
			</span>
			@endif

		</div>

		<div>
			Alternativa e: <input type="text" name="alternativa_e" required>
			@if($errors->has('alternativa_e'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_e')}}</strong>
			</span>
			@endif

		</div>

		Alternativa Correta: <input type="text" name="alternativa_correta" required="">
			@if($errors->has('alternativa_correta'))
			<span class="help-block">
			<strong>{{$errors->first('alternativa_correta')}}</strong>
			</span>
			@endif

		<div>
		Dificuldade: <input type="number" name="dificuldade" required>
			@if($errors->has('dificuldade'))
			<span class="help-block">
				<strong>{{$errors->first('dificuldade')}}</strong>
			</span>
			@endif
		</div>

		<!--Dificuldade  <select name="dificuldade">
    				 <option value= "1" >Nivel 1</option>
   					 <option value= "2">Nivel 2</option>
   					 <option value= "3">Nivel 3</option>
					 </select>-->

	

		<div>
		Id da disciplina: 
		<select name="disciplina_id" >
			@foreach ($disciplinas as $disciplina)
			<option value="{{$disciplina->id}}">{{$disciplina->id}}</option>
			@endforeach
			@if($errors->has('disciplina_id'))
			<span class="help-block">
			<strong>{{$errors->first('disciplina_id')}}</strong>
			</span>
			@endif
		</select>
		</div>

		<input type="submit" value="cadastrar"/>
	</form>
@stop