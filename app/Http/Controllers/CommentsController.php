<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    // public function index(string $id){
    //     // for listing all comments for specific article 

    // }

    public function store(Request $request){
        // for inserting new comment
        // make notification for comments

        $request->validate([
            'comment_text' =>'required|max:2000',
        ]);

        $comment = new Comment();
        $comment->comment_text = $request->input('comment_text');
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->back();
    }
}
