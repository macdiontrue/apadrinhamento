<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padrinho extends Model
{
     protected $fillable = [
        'nome',
        'sexo',
        'idade',
        'profissao',
        'telefone',
        'email',
        'tipo_ajuda_id'
    ];

    public function criancas()
    {
    	return $this->belongsToMany('App\Crianca', 'padrinho_criancas', 'padrinho_id', 'crianca_id');
    } 
}
