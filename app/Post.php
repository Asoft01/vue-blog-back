<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
        "share" => "boolean"
    ];
    
    protected $fillable= [
        'title', 'sub_content', 'content', 'user_id', 'category_id', 'views', 'share', 'image'
    ];

}
