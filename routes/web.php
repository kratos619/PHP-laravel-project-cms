<?php
use App\Post;
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


Route::get('/find', function(){
$posts = Post::all();
foreach ($posts as  $value) {
  echo $value->title . "<br>";
echo $value->body;
}
});
Route::get('/findbyid', function()
{
$posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
echo "<pre>";
echo  var_dump($posts) ;
echo "</pre>";
});

Route::get('/ORMinsert', function()
{
  $posts = Post::find(2);
$posts->title ="this title insert from ORM 2";
$posts->body ="this body insert from ORM 2";
if($posts->save()){
echo "insert data successfull";
}

});


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert', function () {
// $query = DB::insert('insert into posts(title,body )values(?,?)',['this is post Two','this is post body content']);
//     if($query){
//         echo "insert Successfully";
//     }
//
// });
//
//
// Route::get('posts/{id}', function($id) {
// $query = DB::select('select * from posts where id=?',[$id]);
// foreach($query as $value){
//     echo $value->title;
//     echo "<br/>";
//     echo $value->body;
// }
// });
//
//
// Route::get('update/{id}', function($id) {
// $query = DB::update('update posts set title="this is updated title" where id= ?',[$id]);
// if($query){
//     echo "update Successfull";
// }
// });
//
// Route::get('delete/{id}',function($id){
// $query = DB::delete('delete from posts where id=?', [$id]);
// if($query){
//     echo "delete data successfull";
// }
// });

//Route::get('/post/{id}','PostController@contact');
