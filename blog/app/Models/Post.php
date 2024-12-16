<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; //referencia a migration.
    protected $fillable = ['titulo', 'conteudo', 'foto', 'categoria_id']; // colunas preenchiveis da tabela.

    public function comentarios() { // esse metodo sera passado para a função index do PostController.
        return $this->hasMany(Comentario::class);
    }

    public function avaliacoes() {
        return $this->hasMany(Avaliacoes::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
