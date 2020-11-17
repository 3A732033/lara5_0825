<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class comments extends Model
{
    protected $fillable = [
        'content'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
