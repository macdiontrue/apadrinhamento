<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('frontend.index');
    // }

        public function home(){ 
        if(!Session::has('sessao_cliente')){
            return $this->exibirHome();
        }else{
            return redirect('cliente_perfil');
        }

    }

    //Exibe a pagina inicial
    public function exibirHome(){
        return view('frontend.index');
    }

    //Exibe a pagina de login
    public function form_login(){
        return view('cliente.login');
    }
    //Exibe a pagina de registo de usuario
    public function form_registar_cliente(){
        return view('cliente.create');
    }

    //Exibe a pagina de recuperacao de senha
    public function form_recuperar_senha_cliente(){
        return view('cliente.recuperar');
}
}
