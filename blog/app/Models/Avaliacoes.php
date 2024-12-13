<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{

    protected $table = 'avaliacoes';
    protected $fillable = ['like', 'deslike', 'post_id'];
    
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
