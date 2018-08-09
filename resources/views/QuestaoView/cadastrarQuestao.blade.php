@extends('layouts.default')
@section('content')
    
		<form class="shadow p-3 mb-5 bg-white rounded" action= "/adicionar/questao" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<h1 class="text-center"> Cadastrar questao </h1><br><br>	
		<div class="form-row">
			<h3>Enunciado</h3>
			<div class="col-md-12">
				<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
			      <div class="btn-group">
			        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
			          <ul class="dropdown-menu">
			          </ul>
			        </div>
			      <div class="btn-group">
			        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			          <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
			          <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
			          <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
			          </ul>
			      </div>
			      <div class="btn-group">
			        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
			        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
			        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
			        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
			      </div>
			      <div class="btn-group">
			        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
			        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
			        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
			        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
			      </div>
			      <div class="btn-group">
			        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
			        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
			        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
			        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
			      </div>
			      <div class="btn-group">
					  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
					    <div class="dropdown-menu input-append">
						    <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
						    <button class="btn" type="button">Add</button>
			        </div>
			        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

			      </div>
			      
			      <div class="btn-group">
			        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
			        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
			      </div>
			      <div class="btn-group">
			        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
			        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
			      </div>
			      <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">
			    </div>
			</div>
			<div class="col-md-12">
			    <div id="editor" onkeyup="input_pass()">
			    </div>
			</div>
		</div>

    <input type="hidden" name="enunciado" id="enunciado">

    <script type="text/javascript">
    	function input_pass(){
    		var editor =  $("#editor").text();
    		$('#enunciado').val(editor); 		
    	}
    </script>
  

	    <div class="form-group col-md-6">
	      <label for="alternativa_a">alternativa_a</label>
	      <input type="alternativa_a" id="alternativa_a" name="alternativa_a" placeholder="alternativa_a" class="form-control{{ $errors->has('alternativa_a') ? ' is-invalid' : '' }}" value="{{ old('alternativa_a') }}" required autofocus>
	      @if ($errors->has('alternativa_a'))
	    	<span class = "invalid-feedback" role="alert">
	    		{{$errors->first('alternativa_a')}}
	    	</span>
	    	@endif
	    </div>

	  <div class="form-group">
	    <label for="alternativa_b">alternativa_b</label>
	    <input type="text" id="alternativa_b" name="alternativa_b" placeholder="alternativa_b" class="form-control{{ $errors->has('alternativa_b') ? ' is-invalid' : '' }}" value="{{ old('alternativa_b') }}" required autofocus>
	  	@if ($errors->has('alternativa_b'))
	    	<span class = "invalid-feedback" role="alert">
	    		{{$errors->first('alternativa_b')}}
	    	</span>
	    @endif
	  </div>
		
	  <div class="form-group col-md-6">
	      <label for="alternativa_c">alternativa_c</label>
	      <input type="text" name="alternativa_c" id="alternativa_c" placeholder="alternativa_c" class="form-control{{ $errors->has('alternativa_c') ? ' is-invalid' : '' }}" value="{{ old('alternativa_c') }}" required autofocus>
	      @if ($errors->has('alternativa_c'))
	        <span class = "invalid-feedback" role="alert">
	          {{$errors->first('alternativa_c')}}
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_d">alternativa_d</label>
	      <input type="text" name="alternativa_d" id="alternativa_d" placeholder="alternativa_d" class="form-control{{ $errors->has('alternativa_d') ? ' is-invalid' : '' }}" value="{{ old('alternativa_d') }}" required autofocus>
	      @if ($errors->has('alternativa_d'))
	        <span class = "invalid-feedback" role="alert">
	          {{$errors->first('alternativa_d')}}
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_e">alternativa_e</label>
	      <input type="text"  name="alternativa_e" id="alternativa_e" placeholder="alternativa_e" class="form-control{{ $errors->has('alternativa_e') ? ' is-invalid' : '' }}" value="{{ old('alternativa_e') }}" required autofocus>
	      @if ($errors->has('alternativa_e'))
	        <span class = "invalid-feedback" role="alert">
	          {{$errors->first('alternativa_e')}}
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="alternativa_correta">alternativa_correta</label>
	      <input type="text" name="alternativa_correta" id="alternativa_correta" placeholder="alternativa_correta" class="form-control{{ $errors->has('alternativa_correta') ? ' is-invalid' : '' }}" value="{{ old('alternativa_correta') }}" required autofocus>
	      @if ($errors->has('alternativa_correta'))
	        <span class = "invalid-feedback" role="alert">
	          {{$errors->first('alternativa_correta')}}
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-6">
	      <label for="dificuldade">dificuldade</label>
	      <input type="text"  name="dificuldade" id="dificuldade" placeholder="dificuldade" class="form-control{{ $errors->has('dificuldade') ? ' is-invalid' : '' }}" value="{{ old('dificuldade') }}" required autofocus>
	      @if ($errors->has('dificuldade'))
	        <span class = "invalid-feedback" role="alert">
	          {{$errors->first('dificuldade')}}
	        </span>
	      @endif
	    </div>

		<div class="form-group col-md-4">
	      	<label for="disciplina_id">Diciplina</label>
	      	<select name="disciplina_id" class="form-control{{ $errors->has('disciplina_id') ? ' is-invalid' : '' }}" required autofocus>	
				@foreach ($disciplinas as $disciplina)
				<option value="{{$disciplina->id}}" {{old('disciplina') == $disciplina->id ? 'selected' : '' }}   >{{$disciplina->nome}} </option>
				@endforeach
			</select>
			@if ($errors->has('disciplina_id'))
	    		<span class = "invalid-feedback" role="alert">
	    			{{$errors->first('disciplina_id')}}
	    		</span>
	    	@endif

	    </div>
	  </div>
	  
	  <button type="submit" name="cadastrar" class="btn btn-primary float-right">Cadastrar</button><br><br>

	</form>

@stop