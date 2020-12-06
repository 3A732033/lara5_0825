<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    \App\Models\Post::create([
        'title'=>'test title',
        'content'=>'test content'
    ]);

//    $post=new\App\Post();
//    $post->title='test title';
//    $post->content='test content';
//    $post->save();

//    $posts = \App\Post::all();
//    dd($posts);

//    $post=\App\Post::find(1);
//    dd($post);

//    $posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);

//    $post=\App\Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content',
//    ]);

//    $post=\App\Post::find(2);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();

//    $post=\App\Post::find(1);
//    $post->delete();

//    \App\Post::destroy(2);

//    \App\Post::destroy(3,5,7);

   /* $post=\App\Post::find(1);
    foreach($post->comments as $comment){
        echo $comment->content.'<br>';
    }*/
/*    $allPosts = Post::all();
    dd($allPosts);*/

    $featuredPosts=Post::where('is_feature',1)->get();
    dd($featuredPosts);
});

Route::get('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
