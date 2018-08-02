@extends('layouts.default')
@section('content')

	<h1> Lista de Cursos </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>Id</th>
				<th>Nome do Curso</th>
				<th>Id do ciclo</th>
				<th>Funções</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cursos as $curso)
			<tr>
				<td>{{$curso->id}}</td>
				<td>{{$curso->curso_nome}}</td>
				<td>{{$curso->ciclo_id}}</td>
				<td> 
					<a href="/editar/curso/{{$curso->id}}">Editar</a> - 
					<a href="/remover/curso/{{$curso->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="/cadastrar/curso"> Adicionar um Curso</a>
@stop