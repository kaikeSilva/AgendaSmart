<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //identificar os dados que são permutidos serem salvos
    protected $fillable = [
        'nome',
        'telefone',
        'foto'
    ];
}
