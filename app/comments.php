<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class comments extends Model
{
    use HasFactory;
    protected $fillable =[
        'content'
    ];
}
