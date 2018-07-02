<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Padrinho;
use App\Crianca;
use App\PadrinhoCrianca;

class CentroController extends Controller
{
    public function index()
    {
    	$padrinhos = Padrinho::all();
    	return view('centros.index', compact('padrinhos'));
    }

    public function apadrinhar($id)
    {
    	$padrinho = Padrinho::find($id);

    	$crianca = DB::table('criancas')->select("criancas.*")->where('estado', 0)->orderBy(DB::raw('RAND()'))->take(1)->first();

    	return view('centros.create', compact('crianca','padrinho'));

    }

    public function guardar($id_padrinho, $id_crianca)
    {
    	$padrinho_crianca = new PadrinhoCrianca();
    	$padrinho_crianca->padrinho_id = $id_padrinho;
    	$padrinho_crianca->crianca_id = $id_crianca;                                 
    	$crianca = Crianca::find($id_crianca);
    	$crianca->estado = true;
    	$crianca->update();
    	$padrinho_crianca->save();

    	return redirect('/list');
} 

  public function remover($id_padrinho, $id_crianca)
    {
       
        $crianca_aux = Crianca::find($id_crianca);
        $crianca_aux->estado = false;
        $crianca_aux->update();
        PadrinhoCrianca::where('padrinho_id',$id_padrinho)->where('crianca_id',$id_crianca)->delete();
        

        return redirect('/list');
} 

public function listarPadrinhoCrianca()
{
    $padrinhoCriancas = PadrinhoCrianca::with('padrinho', 'crianca')->get();
    return view('centros.list', ['padrinhoCriancas' => $padrinhoCriancas]);
}

}
