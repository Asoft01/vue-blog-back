<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
