@extends('layouts.default')
@section('content')

	<form class="shadow p-3 mb-5 bg-white rounded" action= "/adcionar/usuario" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar usuário </h1><br><br>	
	  <div class="form-row ">
	    <div class="form-group col-md-6">
	      <label for="nome">Nome</label>
	      <input type="text" class="form-control"  name="nome" id="nome" placeholder="Nome">
	    </div>
	    <div class="form-group col-md-6">
	      <label for="password">Senha</label>
	      <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="email">E-mail</label>
	    <input type="text" class="form-control" id="email" name="email" placeholder="exemplo@exemplo">
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-4">
	      	<label for="curso_id">Curso</label>
	      	<select class="form-control" name="curso_id" >
				@foreach ($cursos as $curso)
				<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
				@endforeach
			</select>
	    </div>
	    <div class="form-group col-md-4">
	    	<label for="tipo_usuario_id">Tipo de usuário</label>
	      	<select class="form-control" name="tipo_usuario_id" >
				@foreach ($tipos_usuario as $tipo_usuario)
				<option value="{{$tipo_usuario->id}}">{{$tipo_usuario->tipo}}</option>
				@endforeach
			</select>
	    </div>
	    <div class="form-group col-md-4">
	    	<label for="tipo_usuario_id">CPF</label>
	    	<input type="text" class="form-control" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx">
	    </div>
	  </div>

	  	<button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>
	</form>
@stop