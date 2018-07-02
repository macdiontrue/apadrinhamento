<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
     public function padrinhos()
    {
    	return $this->belongsToMany('App\Padrinho', 'padrinho_criancas', 'crianca_id', 'padrinho_id');

    } 
}
