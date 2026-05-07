<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    // fillable - Insere informacoes em massa
    protected $fillable = [
        'nome',
        'telefone',
        'endereço',
    ];
}
