@extends('layouts.default')
@section('content')
    
	
	<form class="shadow p-3 mb-5 bg-white rounded" action= "/adicionar/questao" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar questao </h1><br><br>	

	  <div class="form-row ">
	    <div class="form-group col-md-6">
	      <label for="enunciado">enunciado</label>
	      <input type="text" class="form-control"  name="enunciado" id="enunciado" placeholder="enunciado" required>
	      @if ($errors->has('enunciado'))
	        <span class = "help-block">
	          <strong>{{$errors->first('enunciado')}}</strong>
	        </span>
	      @endif
	    </div>

	    <div class="form-group col-md-6">
	      <label for="alternativa_a">alternativa_a</label>
	      <input type="alternativa_a" class="form-control" id="alternativa_a" name="alternativa_a" placeholder="alternativa_a" required>
	      @if ($errors->has('alternativa_a'))
	    	<span class = "help-block">
	    		<strong>{{$errors->first('alternativa_a')}}</strong>
	    	</span>
	    	@endif
	    </div>

	  <div class="form-group">
	    <label for="alternativa_b">alternativa_b</label>
	    <input type="text" class="form-control" id="alternativa_b" name="alternativa_b" placeholder="alternativa_b" required>
	  	@if ($errors->has('alternativa_b'))
	    	<span class = "help-block">
	    		<strong>{{$errors->first('alternativa_b')}}</strong>
	    	</span>
	    @endif
	  </div>
		
	  <div class="form-group col-md-6">
	      <label for="alternativa_c">alternativa_c</label>
	      <input type="text" class="form-control"  name="alternativa_c" id="alternativa_c" placeholder="alternativa_c" required>
	      @if ($errors->has('alternativa_c'))
	        <span class = "help-block">
	          <strong>{{$errors->first('alternativa_c')}}</strong>
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_d">alternativa_d</label>
	      <input type="text" class="form-control"  name="alternativa_d" id="alternativa_d" placeholder="alternativa_d" required>
	      @if ($errors->has('alternativa_d'))
	        <span class = "help-block">
	          <strong>{{$errors->first('alternativa_d')}}</strong>
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_e">alternativa_e</label>
	      <input type="text" class="form-control"  name="alternativa_e" id="alternativa_e" placeholder="alternativa_e" required>
	      @if ($errors->has('alternativa_e'))
	        <span class = "help-block">
	          <strong>{{$errors->first('alternativa_e')}}</strong>
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_correta">alternativa_correta</label>
	      <input type="text" class="form-control"  name="alternativa_correta" id="alternativa_correta" placeholder="alternativa_correta" required>
	      @if ($errors->has('alternativa_correta'))
	        <span class = "help-block">
	          <strong>{{$errors->first('alternativa_correta')}}</strong>
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="dificuldade">dificuldade</label>
	      <input type="text" class="form-control"  name="dificuldade" id="dificuldade" placeholder="dificuldade" required>
	      @if ($errors->has('dificuldade'))
	        <span class = "help-block">
	          <strong>{{$errors->first('dificuldade')}}</strong>
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-4">
	      	<label for="disciplina_id">Diciplina</label>
	      	<select class="form-control" name="disciplina_id" required>	
				@foreach ($disciplinas as $disciplina)
				<option value="{{$disciplina->id}}">{{$disciplina->nome}}</option>
				@endforeach
			</select>
			@if ($errors->has('disciplina_id'))
	    		<span class = "help-block">
	    			<strong>{{$errors->first('disciplina_id')}}</strong>
	    		</span>
	    	@endif
	    </div>

	  	<button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>
	</form>
@stop