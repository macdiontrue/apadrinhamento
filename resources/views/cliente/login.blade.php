@extends('layouts.app')
<!--CONTEUDO DE lOGIN-->
@section('titulo')
	Formulario de Autenticacao
@endsection
<!--CONTEUDO DE lOGIN-->
<br><br><br><br>
@section('conteudo')
	 <form method="post" action="{{url('form_autenticar_cliente')}}">

		 	<!--csrf_field-->
		 	{{csrf_field()}}
			<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
		 		@include('inc.erros')
		 	   </div>
		 	<div class="row">
		 	<!--Formulario de Login-->
		 	<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">
		 		 <!--Imagem-->
		 		<center><img src="img/login.png" class="img-responsive"></center><br>

		 		  <!--Introducao de email-->
		 	      <div class="form-group">
				    <input type="email" class="form-control input-lg" name="txtEmail" id="email"  placeholder="Introduza o email">
				  </div>
				  <!--Introducao da senha-->
				  <div class="form-group">
				    <input type="password" class="form-control input-lg" name="txtSenha" id="senha" placeholder="Introduza a senha">
				  </div>
				  <!--Submissao de dados-->
			 	 <button type="submit" class="btn btn-success btn-block btn-lg">Entrar</button><br>
			 	 <div class="row">
			 	 	<div class="col-md-2 col-md-offset-2">
			 	 		<a href="/login/facebook"><img src="/img/facebook.png" alt="facebook"></a><br>
			 	 	</div>
			 	 	<div class="col-md-2">
			 	 		<a href="/login/google"><img src="/img/google-plus.png" alt="google-plus"></a><br>
			 	 	</div>
			 	 	<div class="col-md-2 ">
			 	 		<a href="/login/linkedin"><img src="/img/linkedin.png" alt="linkedin"></a><br>
			 	 	</div>
			 	 	<div class="col-md-2">
			 	 		<a href="/login/twitter"><img src="/img/twitter.png" alt="twitter"></a><br>
			 	 	</div>
			 	 </div>
			 	  
		 		  
			 	  <!--Link pra recuperar a senha-->
			 	 <div class="text-center"><a href="{{url('form_recuperar_Senha_cliente')}}">Esqueceu a Senha?</a></div>
			 	 <!--Link pra criar nove conta de usuario-->
			 	 <div class="text-center"><a href="{{url('form_registar_cliente')}}">Criar Conta</a></div>
		 	</div>
	 	</div><!--Fim row-->
	</form><br>
@endsection