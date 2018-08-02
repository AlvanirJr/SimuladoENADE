@extends('layouts.default')
@section('content')
    
	<h1> Lista de Simulado dos Alunos </h1><br><br>
	<table class="table">
 		<thead>
		
			<tr>
				<th>Id do Simulado Aluno </th>
				<th>Id do Aluno</th>
				<th>Id do Simulado</th>
				<th>Funções</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($simuladoAlunos as $simuladoAluno)
			<tr>
				<td>{{$simuladoAluno->id}}</td>
				<td>{{$simuladoAluno->aluno_id}}</td>
				<td>{{$simuladoAluno->simulado_id}}</td>
				<td>
					<a href="/editar/SimuladoAluno/{{$simuladoAluno->id}}">Editar</a> -
					<a href="/remover/SimuladoAluno/{{$simuladoAluno->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
	<a href="/cadastrar/SimuladoAluno"> Adicionar um Simulado Aluno</a>
@stop