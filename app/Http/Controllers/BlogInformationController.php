<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogInfoRequest;
use App\Models\BlogInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogInformationController extends Controller
{
    public function index(){
    $blog_information = BlogInformation::first();
    // $var = BlogInformation::sele
    return view('admin.blog_informations.index',[
        'blog_information' => $blog_information,
        'title' => "Blog Information",
    ]);   
    }

    public function create(){
        $blog_information = BlogInformation::first();
        if(! isset($blog_information)){
            return view('admin.blog_informations.create',[
                'blog_information' => new BlogInformation(),
            ]);
        }
        else{
            return redirect()->route('blog_informations.index')->with('success','You Cant create Another item');
        }
    }

    public function store(BlogInfoRequest $request){

        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $blog = BlogInformation::create($data);

        return redirect()->route('blog_informations.index')->with('success','You added Logo and Name for Blog.');
    }
    
    public function edit(string $id){
        $blog_information = BlogInformation::findOrFail($id);
        return view('admin.blog_informations.edit',[
            'blog_information' => $blog_information,
        ]);
    }

    public function update(BlogInfoRequest $request , BlogInformation $blog_information){
    
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads/images', 'public');
            $data['image'] = $path;
        }

        $old_image = $blog_information->image;
        $blog_information->update($data);

        if ($old_image && $old_image != $blog_information->image) {
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('blog_informations.index')->with('success','You Updated Logo and Name for Blog.');
    }

}
