@extends('layouts.app')
<br><br><br><br><br><br>
@section('titulo')
	Recuperar Senha
@endsection
@section('conteudo')
 <form method="post" action="{{url('exe_recuperar')}}">
 	<!--csrf_field-->
 	{{csrf_field()}}
	 	<div class="row">
	 	   <div class="col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
	 		@include('inc.erros')
	 	   </div>
		    <div class="col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
		     <br>
			 <div class="form-group">
			    <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" name="email"  placeholder="Introduza o email">
			  </div>
			
 		 	   <center><button type="submit" class="btn btn-success btn-md">Recuperar Senha</button></center>

 		 	   <div class="text-center">
				   <a href="{{url('/form_Autenticar')}}">Voltar</a>
			   </div>

		   </div>
	 	</div>
	</form>
@endsection