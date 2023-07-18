<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all()->toQuery()->withCount('comments')->paginate(4);

        return view('admin.articles.index',[
            "articles" => $articles,
            'title' => 'Articles List', 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create', [
            'article' => new Article(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $data['user_id'] = Auth::id();
        $article = Article::create($data);
    
        return redirect()->route('articles.index')->with('success', "new ({$article->title}) Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit',[
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $old_image = $article->image;
        $article->update($data);

        if ($old_image && $old_image != $article->image) {
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('articles.index')->with('success', "New ({$article->title}) Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        
        return redirect()->route('articles.index')->with('success', "New ({$article->title}) Deleted!!");
    }
}
