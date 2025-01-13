<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opcao extends Model
{
    protected $table = 'opcoes';
    protected $fillable = ['nome', 'valor'];

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
