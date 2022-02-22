<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    /**
     * Get all categoy's post
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'categorie_id');
    } 
}
