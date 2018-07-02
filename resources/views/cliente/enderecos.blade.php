<!--Formulario do Utilizador-->
@extends('layouts.app')
<!--Titulo-->
@section('titulo')
	Registo do Usuario
@endsection
<!--Conteudo-->
<br><br><br>
@section('conteudo')

@include('inc.erros')

	 	<div class="row">
	 		 <div class="col-md-8 col-md-offset-2 col-sm-8  col-xs-12">
	 		 	

	 		 	<h2 class="text-success">
		 			<span class="glyphicon glyphicon-map-marker text-success">
		 				Meus Enderecos
		 		    </span>
		 		</h2><br>


 		        <div class="panel panel-info">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<img src="img/tela.jpg" style="width:90px;height:60px" alt="Restaurante didatico icm" class="img-responsive">
							</div>
							<div class="col-md-9">
								<span class="text-primary"><b>Restaurante Continental</b></span>
								<br>
							    <span style="margin-left:10px;width: 50px">
							    	Precos:100MT-1000MT
							    </span>
							</div>
						</div>
					
				    </div>
			    </div>

	 	     </div><!--Fim Da coluna-->


	 	     <center>
	 	     	<a href="{{url('form_cadastrar_endereco')}}" class="btn btn-success btn-md">
	 		 	     <i class="glyphicon glyphicon-plus text-success">
		 		    </i>Adicionar Novo Endereco
	 		    </a>
	 	     </center>


	 	</div><!--Fim da row-->

@endsection

