<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimateController extends Controller
{
	// create method called _construct that invokes the middleware and authenticates 
	
	  public function __construct()
    {
        $this->middleware('auth');
    }
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


    // create method called index that returns a view and display the climate page
    
    public function index()
    {
        return view('Climate');
    }
}