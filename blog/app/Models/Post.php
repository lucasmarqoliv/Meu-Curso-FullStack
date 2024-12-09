<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['titulo', 'conteudo', 'foto'];

    public function comentarios() { // esse metodo sera passado para a função index do PostController.
        return $this->hasMany(Comentario::class);
    }

    public function avaliacoes() {
        return $this->hasMany(Avaliacoes::class);
    }
}
