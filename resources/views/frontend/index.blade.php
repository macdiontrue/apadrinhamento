@extends('layouts.app')

<!--Definicao de Jumbotron-->
@section('jumbotron')
<div class="jumbotron jumbotron-index text-center">
  <br><br><br><br>
  <h1>Apadrinhe ja, uma Crianca<br>Onde quer que esteja.</h1>
  <form class="form-inline">
   	<a href="{{url('form_registar')}}" class="btn btn-primary btn-lg ">Apadrinhe</a>
  </form>
</div>
@endsection

<!--Adicao de conteudo-->
@section('conteudo')

  <div class="starter-template">
        <h1>Apadrinhamento de Criancas</h1>
        <p class="lead">Esta aplicacao eh uma inovacao da atualidade. Esta eh uma plataforma que permite que qualquer pessoa possa apadrinhar uma crianca sem se deslocar a um centro de acolhimento quer, veja e comece a usar a aplicacao.</p>
  </div>

	<div class="row">
		<div class='list-group gallery'>
            
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c1.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c2.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->


            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c4.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->  
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c13.jpg')}}" />
                </a>
            </div> <!-- col-6 / end --> 
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c6.jpg')}}" />
                </a>
            </div> <!-- col-6 / end --> 
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c7.jpg')}}" />
                </a>
            </div> <!-- col-6 / end --> 
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/c8.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->       
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
@endsection
