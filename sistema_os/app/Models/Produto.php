<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model // criação do model (classe) Produto
{
    protected $table = 'produto';
    protected $fillable = ['nome', 'valor', 'descricao', 'data_validade']; // array que vai receber os campos preenchiveis no template.
}
