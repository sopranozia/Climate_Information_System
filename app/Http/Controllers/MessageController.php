<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{

public function submit(Request $request){


$validatedData = $request->validate([
        'name' => 'required|unique:posts|max:255',
        'email' => 'required',
        'message' => 'required'
         
    ]);


$message = new Message;

$message->name = $request->input('name');
$message->email = $request->input('email');
$message->message = $request->input('message');

$message->save();

return redirect()->back()->with('message', 'Your Message has been sent successfully!');


}



public function getMessages(){

$message = Message::all();

return view('messages')->with('messages',$message);


}


}