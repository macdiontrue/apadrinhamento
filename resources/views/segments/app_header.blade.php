 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          @if(Session::has('sessao_cliente'))
              <a class="navbar-brand" href="/cliente_perfil/{{$usuario->id_usuario}}"><img src="{{url('img/logokud.png')}}" alt="AAPCttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt" class="img-responsive img-logo"></a>
          @elseif(Session::has('sessao_restaurante'))
             <a class="navbar-brand" href="/restaurante_perfil/{{$restaurante->id_restaurante}}"><img src="{{url('img/logokud.png')}}" alt="AAPC" class="img-responsive img-logo"></a>
          @else
            <a class="navbar-brand" href="/"><img src="{{url('img/logokud.png')}}" alt="AAPC" class="img-responsive img-logo"></a>
          @endif
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">

                          @if(Session::has('sessao_cliente'))

                        <center>
                            <li class="dropdown"  class="divider"><span class="sms">Seja bem vindo(a),{{session('nome')}}</span>
                              <a data-toggle="dropdown" class="dropdown-toggle"><img   src="{{url('img/user.png')}}" class="img-resposinve img-circle  img-user" ></a>

                            <ul class="dropdown-menu col-md-offset-4">
                                <li><a href="/form_editar_perfil/{{$usuario->id_usuario}}">Editar Perfil</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{url('gestao_de_enderecos')}}">Meus Enderecos</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="#">Meus Pedidos</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{url('sair')}}" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                            </ul>
                           </li>
                       </center>
                       @elseif(Session::has('sessao_restaurante'))
                            <li><a href="#">Pedidos <span class="badge">10</span></a></li>
                                     <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{session('name')}}
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Editar Perfil</a></li>
                                  <li><a href="{{url('sair')}}" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                </ul>
                            </li>

                       @else
                         
                         {{--  <li><a href="{{url('form_registar_restaurante')}}">Registe seu centro</a></li> --}}
                          <li><a href="{{url('form_registar_cliente')}}"><span class="glyphicon glyphicon-user"></span>Registe-se</a></li>
                          <li><a href="{{url('form_Autenticar')}}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

                       @endif

                </ul>
              </div><!--/.nav-collapse -->
           </div>
  </nav>
