<!DOCTYPE html>
<html lang="en">
  <head>

          <!--Definicao dos meta Tags-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sistema de pedidos online para restaurantes">
        <meta name="author" content="Rodrigues Mafumo,Dionisio Macamo, Costa Tangune">
       
        <!--Definicao do titulo-->
        <title>@yield('titulo','Apadrinhamento de Criancas')</title>

         <!--Definicao de Links-->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/workaround.css')}}" rel="stylesheet">
        <link href="{{asset('css/estilo.css')}}" rel="stylesheet">

    </head>
  <body>
          <!--definicao da navegacao-->
     
     @include('segments.app_header')
   
    <!--jumbotron-->
     @yield('jumbotron')

    <!--Conteudo-->
    <div class="container">
       @yield('conteudo')
    </div>

  <!--Definicao do footer-->
    @include('segments.app_footer')

    <!-- Definicao de scripts -->
    @include('layouts.app_scripts')
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
