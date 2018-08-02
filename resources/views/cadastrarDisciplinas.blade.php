@extends('layouts.default')
@section('content')

	<form class="shadow p-3 mb-5 bg-white rounded" action= "/adicionar/disciplina" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar disciplina </h1><br><br>	

	  <div class="form-row ">
	    <div class="form-group col-md-6">
	      <label for="nome">Nome</label>
	      <input type="text" class="form-control"  name="nome" id="nome" placeholder="Nome" required>
	      @if ($errors->has('nome'))
	        <span class = "help-block">
	          <strong>{{$errors->first('nome')}}</strong>
	        </span>
	      @endif
	    </div>

	    <div class="form-group col-md-4">
	      	<label for="curso_id">Curso</label>
	      	<select class="form-control" name="curso_id" required>	
				@foreach ($cursos as $curso)
				<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
				@endforeach
			</select>
			@if ($errors->has('curso_id'))
	    		<span class = "help-block">
	    			<strong>{{$errors->first('curso_id')}}</strong>
	    		</span>
	    	@endif
	    </div>	 

		</div>
		<button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>
	</form>
@stop