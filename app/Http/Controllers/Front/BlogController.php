<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        return view('front/blogs', [
            'title' => 'blog',
            'categories' => Category::all(),
            // 'categories' => Category::has('articles')->with(['articles' => function ($query) {
            //     $query->latest()->limit(1);  // Mengambil artikel pertama
            // }])->get(),
            "article" => Article::latest()->first(),
        ]);
    }

    public function show($id)
    {

        $article = Article::find($id);
        // Cek apakah post sudah dilihat dalam session
        if (!session()->has($id)) {
            $article->increment('views');
            session()->put($id, true);
        } else {
        }
        return view('front/blog', [
            'title' => 'blog',
            'article' => Article::find($id),
            'posts' => Article::latest()->get()
        ]);
    }
}
