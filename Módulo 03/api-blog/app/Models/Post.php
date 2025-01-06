<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; // conexão do model com a tabela de post no banco de dados.

    protected $fillable = ['titulo', 'conteudo', 'foto', 'categoria_id']; // colunas da tabela de post prenchiveis no cadastro de post.
}
