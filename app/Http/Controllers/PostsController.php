<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use \DB;

class PostsController extends Controller
{
    


 /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
    }





public function index(){


	return view('posts');

}




public function post(Request $request){


$validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'name' => 'required',
        'content' => 'required',
        'image' => 'required'
         
    ]);



	$posts  = new Posts;
    $posts ->title = $request ->input('title');
    $posts ->name = $request->input('name');
    $posts ->content = $request->input('content');
    $posts ->image = $request->input('image');
    $posts ->save();

   return redirect()->back()->with('content','Your Post has been Created Succesfully!');
   



}


public function show(){


        $posts = posts::latest()->paginate(5);
        $posts  = new Posts;
         $posts = posts::all();
         return view('show',compact('posts'))->with('i',(request()->input('page',1)-1));
}


public function edit($user_id){


    
    $posts = posts::find($user_id);
    return view('edit',compact('posts'));
}

public function update(Request $request){


$validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'name' => 'required',
        'content' => 'required',
        'image' => 'required'
         
    ]);


    
    $posts  = Posts::find($user_id);
    $posts ->title = $request ->input('title');
    $posts ->name = $request->input('name');
    $posts ->content = $request->input('content');
    $posts ->image = $request->input('image');
    $posts ->save();

   return redirect('/posts')->with('success','Your Post has been Updated Succesfully!');



}

public function destroy($user_id){

    
    $post = Posts::find($user_id);
    $post->delete();
//  $del = posts::where('id',$post->id)->get()->first();

// $del->delete();

// \DB::table('globaltemp')->where('user_id',request('$post-> id'))->delete();



return redirect('/posts')->with('success','Your Post has been Deleted Succesfully!');







}



}
