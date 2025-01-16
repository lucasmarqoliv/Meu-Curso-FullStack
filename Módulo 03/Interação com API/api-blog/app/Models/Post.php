<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; // conexão do model com a tabela de post no banco de dados.

    protected $fillable = ['titulo', 'conteudo', 'foto', 'categoria_id']; // colunas da tabela de post prenchiveis no cadastro de post.

    public function comentarios() { // esse metodo sera passado para a função index do PostController.
        return $this->hasMany(Comentario::class); // (um post pode conter muitos comentarios (hasMany))
    }

    public function avaliacoes() { // o nome da função é o mesmo da tabela
        return $this->hasMany(Avaliacoes::class);
    }

    public function categorias() {
        return $this->belongsTo(Categoria::class);
    }

    public function tags() { // PERTENCE A MUITOS (belongsToMany) SE USA EM relacionamentos (n para n).
        return $this->belongsToMany(Tag::class);
    }

    public function opcoes() {
        return $this->belongsTo(Opcao::class);
    }
}
