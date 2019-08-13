
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	
	
	<?php

Route::get('/form',function() {
   return view('form');
});

Route::delete('/show',function(){

         $posts  = new Posts;
         $posts = posts::findOrFail();
         return view('show',compact('posts'));

});



Route::get('/'['globaltemp'=> 'PostsController@show']);





    </body>
</html>

