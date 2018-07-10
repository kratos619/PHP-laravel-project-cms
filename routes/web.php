<?php
use App\Post;
use App\User;
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

Route::get('/user/{id}/post', function($id)
{
  echo User::find($id)->post;
});
Route::get('/post/{id}/user', function($id)
{
  echo Post::find($id)->user->name;
});

Route::get('/posts', function(){
$user = User::find(1);
foreach ($user->posts as $value) {
echo  $value->title . "<br>";
echo $value->body ."<br>";
}
});
//
//
// Route::get('/find', function(){
// $posts = Post::all();
// foreach ($posts as  $value) {
//   echo $value->title . "<br>";
// echo $value->body;
// }
// });
// Route::get('/findbyid', function()
// {
// $posts = Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
// echo "<pre>";
// echo  var_dump($posts) ;
// echo "</pre>";
// });
// //
// Route::get('/ORMinsert', function()
// {
//   $posts = new Post;
// $posts->title ="this title insert from ORM 2";
// $posts->body ="this body insert from ORM 2";
// if($posts->save()){
// echo "insert data successfull";
// }
// });
//
// Route::get('/update', function()
// {
// Post::where('id',2)->update(['title'=>'My new Title','body'=>"new Data"]);
// });
//
// Route::get('/softDeletes', function()
// {
// if(Post::find(2)->delete()){
// echo  "delete successfull";
// }
//
// });
//
//
// Route::get('/readsoftDeletes', function()
// {
// echo Post::withTrashed()->where('id',2)->get();
// });
// Route::get('/restore', function()
// {
// echo Post::withTrashed()->where('id',2)->restore();
// });
// Route::get('/forcedelete', function()
// {
//  if(Post::withTrashed()->where('id',2)->forceDelete()){
// echo "selete Successfull";
// }
// });
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
