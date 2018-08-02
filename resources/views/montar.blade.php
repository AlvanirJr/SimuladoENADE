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

	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop