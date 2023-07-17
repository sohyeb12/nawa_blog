<?php

namespace App\Http\Controllers;

use App\Models\Article;
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

    public function store(Request $request){
        $request->validate([
            'comment_text' => 'string|nullable|max:1500',
            'review_rating' => 'string|nullable',
        ]);
    }
}
