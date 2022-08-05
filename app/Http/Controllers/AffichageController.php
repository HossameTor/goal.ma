<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class AffichageController extends Controller
{
    // public function afficher($slug){
    //     $post = Post::whereSlug($slug)->first();
    //     $post->increment('nb_vues');
        
    // }
    public function category($slug)
    {
        $category =  Category::whereSlug($slug)->first();
        $posts = Post::where('status', 'published')
            ->whereCategoryId($category->id)
            ->take(9)
            ->paginate(9);
 

 
        return view('category', compact('posts', 'category'));
    }
    public function show($cateslug, $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        $post->increment('nb_vues');
        return view('article', compact('post'));
    }
}
