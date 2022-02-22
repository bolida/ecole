<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        
        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
    
        return view('article', [
            'post' => $post
        ]);

    }

    /**
     * 
     */
    public function register()
    {
        $post = Post::find(4);
        $video = Video::find(1);
        
        $comment1 = new Comment(['content' => 'Mon premier commentaire']);
        $comment2 = new Comment(['content' => 'Mon deuxième commentaire']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment(['content' => 'Mon troisième commentaire']);
        $video->comments()->save($comment3);


    }
}
