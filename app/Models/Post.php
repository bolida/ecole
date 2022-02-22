<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content'];

    /**
     * Get the author of the post
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the categorie of the post
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


    /**
     * Get all of the post's comments.
    */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    

}
