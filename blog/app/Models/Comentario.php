<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['texto', 'post_id'];

    public function post() { // relacionamento de cardinalidade da tabela post com tabela comentario.
        return $this->belongsTo(Post::class); // (os comentarios pertencem a um post (belongsTo)) relacionamento de 1 para N
    }

    public function categorias() { // esse metodo sera passado para a função index do PostController.
        return $this->hasMany(Comentario::class);
    }

}
