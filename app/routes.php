<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello/{name?}', function ($name = "User")
    {
        return "Hello! $name";
    })->where('name', '[a-zA-Z]+');
Route::get('/test2', 'TestController@showHello');
Route::get('/redirect', function(){
  return Redirect::route('g-form');
});
Route::get('post-form', array('as'=>'g-form','uses'=>'TestController@postForm'));

Route::get('/db', function(){


   $res = Artist::where('name', 'Metallica')->first(); 

   $album = Album::find(9);
   var_dump($album);

   var_dump($album->artist->Name);
  
   //  $res = DB::table('Artist')->whereBetween('ArtistId', array(10, 15))->get();
  //  $sql = 'select * from Artist limit 1';
  //  $res = DB::select($sql);
   $alb =   $res->albums;

   foreach ($alb as $item){
       echo '<br>';
       echo $item->Title;
   }
});


Route::post('post-form', array('as'=>'form','uses'=>'TestController@postForm'));
Route::get('/test1', 'TestController@getForm');
Route::get('/test', 'HomeController@showTest');
