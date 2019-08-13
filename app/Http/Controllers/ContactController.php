<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Contact');
    }
	
	public function store(Request $request)
    {
		
     $Mail = new $mail;


     $Mail ->name = $request ->input('name');
     $Mail ->email = $request ->input('email');
     $Mail ->message = $request ->input('message');
      $Mail ->save();

       return redirect('/Contact')->with('success','Your Email has been sent Succesfully!');




    }
}