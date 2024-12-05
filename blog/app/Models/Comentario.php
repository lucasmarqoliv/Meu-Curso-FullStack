<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['texto', 'post_id'];

    public function post() { // relacionamento de cardinalidade da tabela post com tabela comentario.
        return $this->belongsTo(Post::class); 
    }

}
