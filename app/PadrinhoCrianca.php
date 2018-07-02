<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PadrinhoCrianca extends Model
{
     protected $fillable = [
        'padrinho_id',
        'crianca_id',
    ];

public function padrinho(){
	return $this->belongsTo('App\Padrinho', 'padrinho_id');
}


public function crianca(){
		return $this->belongsTo('App\Crianca', 'crianca_id');
}



}
