<?php

namespace App\Http\Controllers;

use App\Models\Communication;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request){
        
        $validate = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|email|max:150',
            'phone' => 'required|string',
            'text_message' =>'required|string|min:10|max:4096',
        ]);

        dd($validate);

        $communication = new Communication();
        $communication->name = $request->input('name');
        $communication->email = $request->input('email');
        $communication->subject = $request->input('subject');
        $communication->phone = $request->input('phone');
        $communication->text_message = $request->input('text_message');
        $communication->save();

        return redirect()->back();
    
    }

}
