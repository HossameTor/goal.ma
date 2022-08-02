<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AffichageController extends Controller
{
    // public function afficher($slug){
    //     $post = Post::whereSlug($slug)->first();
    //     $post->increment('nb_vues');
        
    // }
    public function show($cateslug, $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        $post->increment('nb_vues');
        return view('article', compact('post'));
    }
}
