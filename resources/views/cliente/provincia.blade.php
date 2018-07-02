@extends('layouts.app')
<br><br><br><br><br><br>
@section('titulo')
	Recuperar Senha
@endsection
@section('conteudo')
 <form method="post" action="{{url('form_salvar_provincia')}}">
 	<!--csrf_field-->
 	{{csrf_field()}}
	 	<div class="row">
	 	   <div class="col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
	 		@include('inc.erros')
	 	   </div>
		    <div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
		     <br>
			 <div class="form-group">
			    <label for="txt_nome">Nome da Provincia:</label>
			    <input type="text" class="form-control" id="txt_nome" name="txt_nome"  placeholder="Introduza o nome da provincia">
			  </div>
			
 		 	   <center><button type="submit" class="btn btn-success btn-md">Registar</button></center>

		   </div>
	 	</div>
	</form>
@endsection