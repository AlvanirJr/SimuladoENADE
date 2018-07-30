@extends('layouts.default')
@section('content')
	<h1> Cadastrar Aluno </h1><br><br>
	<form action= "/adicionar/aluno" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Nome:<input type="text" name="nome"/>
		Cpf: <input type="text" name="cpf"                       />
		Senha:<input type="text" name="senha"/>
		Email:<input type="text" name="email"/>
		Curso:
		<select name="curso_id" >
			@foreach ($cursos as $curso)
			<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
			@endforeach
		</select>

		<input type="submit" name="cadastrar"/>
	</form>
@stop