<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
     protected $fillable = [
        'nome',
        'sigla',
        'idade',
        'telefone',
        'email',
        'endereco',
    ];
}
