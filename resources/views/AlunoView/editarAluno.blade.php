@extends('layouts.default')
@section('content')
    
	<h1>Editar Aluno</h1><br><br>
	<form action= "/atualizar/aluno" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$aluno->id}}">
		Email:<input type="text" name="email" value="{{$aluno->email}}"  />
		Senha: <input type="text" name="senha" value="{{$aluno->senha}}" />
		Nome:<input type="text" name="nome" value="{{$aluno->nome}}" />
		Curso:
		<select name="curso_id"  value="{{$aluno->curso_id}}" >
			@foreach ($cursos as $curso)
			<option value="{{$curso->id}}">{{$curso->curso_nome}}</option>
			@endforeach
		</select>
		<input type="submit" value="atualizar"  />
	</form>
@stop