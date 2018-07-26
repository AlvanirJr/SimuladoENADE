@extends('layouts.default')
@section('content')
    
	<h1>Listar Questões</h1>
	<table class="table">
 		<thead>
		
			<tr>
				<th>Numº Questao</th>
				<th>Enuciado</th>
				<th>Nivel Questão</th>
				<th>ID da Disciplina</th>
			</tr>
		</thead>
		<tbody>
			@foreach($questaos as $questao)
			<tr>
				<td>{{$questao->id}}</td>
				<td>{{$questao->enuciado}}</td>
				<td>{{$questao->dificuldade}}</td>
				<td>{{$questao->disciplina_id}}</td>

	

				<td> <a href='/editar/questao/{{$questao->id}}'>Editar</a> - <a href='/remover/questao/{{$questao->id}}'>Remover</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<a href="/cadastrar/questao"> Inserir novo </a>
@stop