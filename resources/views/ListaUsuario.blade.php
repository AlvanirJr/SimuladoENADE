@extends('layouts.default')
@section('content')
    
	<h1>Listar Usuarios</h1>
	<table class="table">
 		<thead>
		
			<tr>
				<th>Id</th>
				<th>nome</th>
				<th>cpf</th>
				<th>senha</th>
				<th>email</th>
				<th>Id do curso</th>
				<th>Id do tipo de usuario</th>
				<th>Funções</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $usuario)
			<tr>
				<td>{{$usuario->id}}</td>
				<td>{{$usuario->nome}}</td>
				<td>{{$usuario->cpf}}</td>
				<td>{{$usuario->senha}}</td>
				<td>{{$usuario->email}}</td>
				<td>{{$usuario->curso_id}}</td>
				<td>{{$usuario->tipo_usuario_id}}</td>
	

				<td> <a href='/editar/usuario/{{$usuario->id}}'>Editar</a> - <a href='/remover/usuario/{{$usuario->id}}'>Remover</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<a href="/cadastrar/usuario"> Inserir novo </a>
@stop