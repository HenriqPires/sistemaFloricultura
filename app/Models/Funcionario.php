<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    // Define a tabela associada ao modelo
    protected $table = 'funcionarios';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'telefone',
        'email',
    ];
}
