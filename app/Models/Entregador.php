<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entregador extends Model
{
    // Define a tabela associada ao modelo
    protected $table = 'entregadores';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',
        'email',
    ];
}
