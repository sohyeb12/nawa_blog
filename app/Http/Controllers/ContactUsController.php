<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request){
        // for inserting information 
        // make notification for ContactUs 
        
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string',
            'message' =>'required|string|min:10|max:4096',
        ]);

        $communication = new Communication();
        $communication->name = $request->input('name');
        $communication->email = $request->input('email');
        $communication->phone = $request->input('phone');
        $communication->message = $request->input('message');
        $communication->save();

        return redirect()->route('')->with('success','Communication added');
    
    }

}
