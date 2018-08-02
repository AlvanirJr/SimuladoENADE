@extends('layouts.default')
@section('content')
    
	<form class="shadow p-3 mb-5 bg-white rounded" action= "/adicionar/curso" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar curso </h1><br><br>	

		<div class="form-row ">
	    	<div class="form-group col-md-6">
	      	<label for="curso_nome">Tipo curso</label>
	      	<input type="text" class="form-control"  name="curso_nome" id="curso_nome" placeholder="Nome" required>
	    	@if ($errors->has('curso_nome'))
	    	<span class = "help-block">
	    		<strong>{{$errors->first('curso_nome')}}</strong>
	    	</span>
	    	@endif
	    	</div> 
	   	</div>

	  <button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>
	</form>


@stop