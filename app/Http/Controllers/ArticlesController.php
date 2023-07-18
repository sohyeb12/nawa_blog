<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogInformation;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::withCount('comments')->paginate(6);
        return view('admin.comments.index',[
            'articles' => $articles,
        ]);
    }

    public function show(string $id){
        $article = Article::with('comments')->findOrFail($id);
        $blog_information = BlogInformation::first();

        // dd($article);
        return view('blog.show',[
            'article' => $article ,
            'blog_information' => $blog_information,
        ]);
    }
}
