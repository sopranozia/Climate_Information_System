<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Posts;


class ShowController extends Controller
{
    //


    public function show(){
     


     
          $posts  = new Posts;
         $posts = posts::findOrFail();
         return view('show',compact('posts'));



    }
}
