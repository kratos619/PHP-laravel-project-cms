<?php

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

Route::get('/insert', function () {
$query = DB::insert('insert into posts(title,body )values(?,?)',['this is post Two','this is post body content']);
    if($query){
        echo "insert Successfully";
    }

});


Route::get('posts/{id}', function($id) {
$query = DB::select('select * from posts where id=?',[$id]);
foreach($query as $value){
    echo $value->title;
   echo "<br/>";
    echo $value->body;
}
});


//Route::get('/post/{id}','PostController@contact');
