<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'tel1',
        'tel2',
        'endereco1',
        'endereco2',
        'cep1',
        'cep2',
        'cidade1',
        'cidade2',
        'user_id'      
    ];
    
}
