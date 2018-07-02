<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey='id_usuario';


    //retorna enderecos de um dados= cliente
    public function enderecos_do_usuario(){
    	return $this->hasMany('App\Endereco','id_usuario');
    }
}
