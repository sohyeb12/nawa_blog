<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommuncationRequest;
use App\Models\BlogInformation;
use App\Models\Communication;
use Illuminate\Http\Request;

class CommunicationsController extends Controller
{
    public function store(CommuncationRequest $request)
    {

        $data = $request->validated();

        $coummunication = Communication::create($data);

        return view('blog.success');
    }

    public function create(){

        $blog_information = BlogInformation::first();
        return view('blog.contact_us',[
            'title' => "Now Contact With Us",
            'coummunication' =>  new Communication(),
            'blog_information' => $blog_information,
        ]);
    }
}
