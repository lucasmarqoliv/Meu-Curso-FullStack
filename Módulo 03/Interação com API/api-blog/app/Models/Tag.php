<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['nome'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
