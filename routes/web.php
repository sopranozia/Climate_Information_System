<?php
use Illuminate\Support\Facades\Input;
use App\message;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Climate', function () {
    return view('Climate');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Temperatures', function () {
    return view('Temperatures');
});

Route::get('/dash', function () {
    return view('dash');
});

Route::get('/get', function () {
    return view('get');
});

Route::get('/Weather', function () {
    return view('Weather');
});

Route::get('/edit', function () {
    return view('edit');
});


Route::delete('/show',function(){

         $posts  = new Posts;
         $posts = posts::findOrFail();
         return view('show',compact('posts'));


});

Route::post('/search', function () {
    
     $q  = Input::get('q');
      $user = message::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('search')->withDetails($user)->withQuery ( $q );
    else return view ('search')->withMessage('No Database found. Try to search again !');
});








Route::post('/Contact/submit','MessageController@submit');


Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');

Auth::routes();

Route::get('/Climate', 'ClimateController@index')->name('Climate');

Auth::routes();

Route::get('/About', 'AboutController@index')->name('About');

Auth::routes();

Route::get('/Contact', 'ContactController@index')->name('Contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/Temperatures', 'TemperaturesController@index')->name('Temperatures');

Auth::routes();

Route::get('/posts', 'PostsController@index')->name('posts');

Route::post('/posts/submit','PostsController@post');

Auth::routes();
Route::post('/posts/{post}','PostsController@update');


Route::get('/dash','DashController@index')->name('dash');

Auth::routes();

Route::get('/show','PostsController@show')->name('show');

Route::get('/get','GetController@index')->name('get');

Route::get('/Weather','WeatherserviceProvider@register')->name('Weather');

Route::get('/media','VideosController@index')->name('media'); 

Route::delete('/posts/{post}','PostsController@destroy'); 


Route::post('/Contact/submit','searchController@index');


Route::post('/Contact/submit','MessageController@submit');




