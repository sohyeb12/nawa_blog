<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    // public function index(string $id){
    //     // for listing all comments for specific article 

    // }

    public function store(Request $request)
    {
        // for inserting new comment
        // make notification for comments

        $request->validate([
            'comment_text' => 'required|max:2000',
        ]);



        if (!Auth::id() == null) {
            $comment = new Comment();
            $comment->comment_text = $request->input('comment_text');
            $comment->user_id = Auth::id();
            $comment->article_id = $request->input('article_id');
            $comment->save();
        }
        else{
            return redirect()->route('login');
        }

        return redirect()->back();
    }

    public function show(string $id){
        $comments = Comment::where('article_id','=',$id)->with('article')->orderBy('created_at')->paginate(5);
        $article = Article::findOrFail($id);
        return view('admin.comments.show',[
            "comments" =>  $comments,
            'article' => $article,
        ]);
    }
}
