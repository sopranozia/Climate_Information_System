<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class VideosController extends Controller
{
    // create function to authenticate access to video page

   public function __construct()
    {
        $this->middleware('auth');
    }


   public function index(){


  $this->middleware('auth');


$videos = DB::table('laravel_videoables')->get();
        return view('media');
        

  }



}
