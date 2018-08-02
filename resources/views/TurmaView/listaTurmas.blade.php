@extends('layouts.default')
@section('content')
    
	<h1> Lista de Turmas </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>Id</th>
				<th>ID do Aluno</th>
				<th>ID do Ciclo</th>
				<th>Funções</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($turmas as $turma)
			<tr>
				<td>{{$turma->id}}</td>
				<td>{{$turma->aluno_id}}</td>
				<td>{{$turma->ciclo_id}}</td>
				<td> 
					<a href="/editar/Turma/{{$turma->id}}">Editar</a> -
					<a href="/remover/Turma/{{$turma->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/Turma"> Adicionar uma Turma</a>
@stop