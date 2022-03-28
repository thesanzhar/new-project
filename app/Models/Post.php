<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasImage;

    protected $fillable = [
        'user_id',
        'title',
        'excerpt',
        'body',
        'image'
    ];
}
