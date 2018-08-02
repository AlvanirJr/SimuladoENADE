@extends('layouts.default')
@section('content')
    
	<h1>Cadastrar Ciclos</h1><br><br>
	<form class="form-group" action = "/store/ciclo" method = "post">
		<input type = "hidden" name="_token" value="{{csrf_token()}}">
		Nome: <input type="text"  name="tipo_ciclo"  required>
		@if($errors->has('tipo_ciclo'))
			<span class="help-block">
				<strong>{{$errors->first('tipo_ciclo')}}</strong>
				
			</span>
			@endif		
		<input type="submit" value="cadastrar"/>
	</form>
@stop