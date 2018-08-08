@extends('layouts.default')
@section('content')
    
	<h1> Questões do simulado </h1><br><br>
	<table class="table table-hover table-bordered" id="table_questao">
	  	<thead>
		    <tr class="text-center">
				<th  scope="col">Nº</th>
				<th class="col-sm-5" scope="col">Questão</th>
				<th scope="col"></th>
		    </tr>
		</thead>
		<tbody>
		    <tr class="text-center">
				<th scope="row">1</th>
				<td>Mark</td>
				<td><a class="btn btn-danger" href="">Deletar</a></td>
		    </tr>
		    <tr class="text-center link " style="cursor: pointer;" onclick="">
				<th class='btn-primary' colspan="3" data-toggle="modal" data-target="#exampleModal"> Adicionar nova Questão</th>
		    </tr>
	  	</tbody>
	</table>

<style type="text/css">
	.modal-dialog {
	  position: absolute;
	  vertical-align: center;
	  top: 150px;
	  margin-left: 20%;
	  width: 1200px;
	}
	.modal-content{
		width: 1200px;
	}
	@media (max-width: 1300px)/* The minimum width of the display area, such as a browser window*/
	{
		.modal-dialog {
			margin-left: 5%;
		  width: 400px;
		}
	}
	
</style>
	<!-- Modal -->
<div class="col-sm-12">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document" >
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><b>Cadastrar questão</b></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="container">
	  			<div class="row">
				    <div class="col-sm-3 border">
				    	<div class="row">
					    	<h6><b> Difículdade: </b></h6>
					      	<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Facíl
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							  <label class="form-check-label" for="exampleRadios2">
							    Médio
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							  <label class="form-check-label" for="exampleRadios2">
							    Difícil
							  </label>
							</div>
						</div><br>
						<div class="row">
							<h6><b>Disciplina</b></h6><br><br>
							<div class="col">
								<select class="form-control" name="curso_id" >
									<option value="" selected>selecione</option>
								</select>	
							</div>
						</div>
				    </div>
				    <div class="col-9">  
					<table class="table table-hover table-bordered">
				 		<thead>
							<tr>
								<th>Questões</th>
							</tr>
						</thead>
						<tbosdy>
							@foreach($disciplinas as $disciplina)
							<tr>
								<td>{{$disciplina->nome}}</td>
								<td> <a class="btn btn-success">Selecionar</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				    </div>
			  	</div>
	      <div class="modal-body">
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@stop