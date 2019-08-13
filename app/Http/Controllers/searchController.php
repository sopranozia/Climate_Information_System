<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    //



    public function index(){
    
    
    
     
    
    
     return view('search');

    }


public function search(Request $request){






	$message  = new Posts;
    
    $message ->name = $request->input('name');
    $message ->content = $request->input('message');
   
    $message ->save();

   


}







}



