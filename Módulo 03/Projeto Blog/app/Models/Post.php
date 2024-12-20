<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; //referencia a migration.
    protected $fillable = ['titulo', 'conteudo', 'foto', 'categoria_id', 'tags_id']; // colunas preenchiveis da tabela.

    public function comentarios() { // esse metodo sera passado para a função index do PostController.
        return $this->hasMany(Comentario::class); // (um post pode conter muitos comentarios (hasMany))
    }

    public function avaliacoes() { // o nome da função é o mesmo da tabela
        return $this->hasMany(Avaliacoes::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function tags() { // PERTENCE A MUITOS (belongsToMany) SE USA EM relacionamentos (n para n).
        return $this->belongsToMany(Tag::class);
    }
}
