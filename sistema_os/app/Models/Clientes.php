<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model // model se conecta com a tabela (migração) para fazer consultas, ou inserção.
{
    protected $table = 'clientes'; // Especifica que este modelo deve usar a tabela 'clientes' no banco de dados
    protected $fillable = ['nome', 'data_nascimento', 'foto'];
}
