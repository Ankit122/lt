<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$hotel = App\Hotel::all();
    return view('welcome')->with('hotel', $hotel);
    
});

Route::get('comments/{id}', function ($id) {
	$comment = App\Comment::where('hotel_id', $id)
               ->orderBy('id', 'desc')
               ->get();

    if(sizeof($comment) == 0){
    	abort('404'); 
    }
               
    return view('comment')->with('comment', $comment);
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'HomeController@addHotel');

Route::post('/addHotel', 'HomeController@postaddHotel');
