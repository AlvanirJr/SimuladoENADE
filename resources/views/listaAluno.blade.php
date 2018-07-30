@extends('layouts.default')
@section('content')
    
	<h1>Listar Aluno</h1>
	<table class="table">
 		<thead>
		
			<tr>
				<th>Id</th>
				<th>nome</th>
				<th>cpf</th>
				<th>senha</th>
				<th>email</th>
				<th>Id do curso</th>
				<th>Funções</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alunos as $aluno)
			<tr>
				<td>{{$aluno->id}}</td>
				<td>{{$aluno->nome}}</td>
				<td>{{$aluno->cpf}}</td>
				<td>{{$aluno->senha}}</td>
				<td>{{$aluno->email}}</td>
				<td>{{$aluno->curso_id}}</td>
				
	

				<td> <a href='/editar/aluno/{{$aluno->id}}'>Editar</a> - <a href='/remover/aluno/{{$aluno->id}}'>Remover</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<a href="/cadastrar/aluno"> Inserir novo </a>
@stop