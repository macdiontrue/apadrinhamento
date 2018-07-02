<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

class UsuarioController extends Controller
{
    
    /*Devolve todos dados do cliente*/
    public function index(Request $request )
    {
        $query=trim($request->get('searchText'));
        $clientes=Usuario::where('cli_nome','LIKE','%'.$query.'%')
        ->paginate(5);
        return view('admin.clientes',compact('clientes'));
    }

    /*Retorna a pagina do registo do cliente*/
    public function create()
    {
        return view('cliente.create');
    }

    /*Armazena os dados do usuario*/
    public function store(Request $request)
    {
        //Validacao
            $this->validate($request,[
                'txtNome'=>'required|between:3,30|alpha_num',
                'txtApelido'=>'required|between:3,30|alpha_num',
                'txtTelefone'=>'required|between:9,9|alpha_num',
                'txtSenha'=>'required|between:8,30',
                'txtSenhaf'=>'required|same:txtSenha',
                'txtEmail'=>'required|email',
            ]);

            //Verificacao do usuario
            $clientes=Usuario::where('usu_nome','=',$request->txtNome)
            ->orWhere('usu_email','=',$request->txtEmail)
            ->get();

            if($clientes->count()!=0){
                $erros_bd=['Ja existe um usuario com mesmo nome ou com mesmo email'];
                return view('form_registar_cliente',compact('erros_bd'));
            }

            //Inserir na base de dados
            $novo_cliente=new Usuario;
            $novo_cliente->usu_nome=$request->txtNome;
            $novo_cliente->usu_apelido=$request->txtApelido;
            $novo_cliente->usu_telefone=$request->txtTelefone;
            $novo_cliente->usu_senha=hash::make($request->txtSenha);
            $novo_cliente->usu_email=$request->txtEmail;
            $novo_cliente->status='1';
            $novo_cliente->save();

            $alert_success=['Usuario Salvado com sucesso!!!'];

            return view('cliente.create',compact('alert_success'));
    }

    /*Mostra o cliente actual*/
    public function show(Usuario $usuario,$id)
    {
        $usuario=Usuario::find($id);
        return view('cliente.perfil',compact('usuario'));
    }

    /*edita o cliente actual*/
    public function edit(Usuario $usuario,$id)
    {
        $usuario=Usuario::find($id);
        return view('cliente.edit',compact('usuario'));
    }

    /*Atualiza o cliente actual*/
    public function update(Request $request, Usuario $usuario,$id)
    {
            //Validacao
            $this->validate($request,[
                'txtNome'=>'required|between:3,30|alpha_num',
                'txtApelido'=>'required|between:3,30|alpha_num',
                'txtTelefone'=>'required|between:9,9|alpha_num',
                'txtSenha'=>'required|between:8,30',
                'txtSenhaA'=>'required|txtSenhaA:txtSenha'
            ]);

            //Atualizacao
            $usuario=Usuario::find($id);

            $usuario->usu_nome=$request->txtNome;
            $usuario->usu_apelido=$request->txtApelido;
            $usuario->usu_telefone=$request->txtTelefone;

            //verificar se a senha existe
            if(!Hash::check($request->txtSenhaA,$usuario->usu_senha)){
                $erros_bd=['A Senha Actual esta Incorrecta'];
                return view('cliente.edit',compact('erros_bd','usuario'));
            }

            $usuario->usu_senha=hash::make($request->txtSenha);
            $usuario->update();

            //fechando a sessao
            Session::flush();
             //Abrindo Sessao de usuario
            Session::put('sessao_cliente','sim');
            Session::put('nome',$usuario->usu_nome);
           
            $id=$usuario->id_usuario;
            
            return redirect('/cliente_perfil/'.$id);
    }

    /*Desativa o cliente*/
    public function destroy(Usuario $usuario,$id)
    {
        $usuario=Usuario::find($id);
        $usuario->status='0';
        $usuario->update();
        return redirect('/admin/Dashboard');
    }

    

     //funcao  para efectuar o login na base de dados
    public function efetuar_login(Request $request){
        //validacao
        $this->validate($request,[
                'txtEmail'=>'required|email',
                'txtSenha'=>'required'
         ]);
        

        //verificar se o email de usuario existe
        $user=Usuario::where('usu_email',$request->txtEmail)->first();
        

        if(count($user)==0){
            $erros_bd=['Essa conta de usuario nao existe'];
            return view('cliente.login',compact('erros_bd'));
        }

        //verificar se a senha existe
        if(!Hash::check($request->txtSenha,$user->usu_senha)){
            $erros_bd=['A Senha esta Incorrecta'];
            return view('cliente.login',compact('erros_bd'));
        }

        //Abrindo Sessao de usuario
        Session::put('sessao_cliente','sim');
        Session::put('nome',$user->usu_nome);
        $id=$user->id_usuario;

        return redirect('/cliente_perfil/'.$id);
   }

   //Fechar a sessao
   public function close(){
        Session::flush();
        return redirect('/');
   }

}
