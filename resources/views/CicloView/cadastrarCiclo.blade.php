@extends('layouts.default')
@section('content')
    
	<form class="shadow p-3 mb-5 bg-white rounded" action= "/adicionar/ciclo" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar Ciclo </h1><br><br>	

		<div class="form-row ">
	    	<div class="form-group col-md-6">
	      	<label for="tipo_ciclo">Tipo Ciclo</label>
	      	<input type="text" class="form-control"  name="tipo_ciclo" id="tipo_ciclo" placeholder="Nome" required>
	    	@if ($errors->has('tipo_ciclo'))
	    	<span class = "help-block">
	    		<strong>{{$errors->first('tipo_ciclo')}}</strong>
	    	</span>
	    	@endif
	    	</div> 
	   	</div>

	  <button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>
	</form>
@stop