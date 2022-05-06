<?php
use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\Route;


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




    //ddd($posts[2]->slug);

    return view('posts', [
           'posts' => Post::with('category')->get()
        ]);

    //return view('posts', [
    //    'posts' => Post::get()
    //]);
});



Route::get('posts/{post:slug}', function (Post $post) {


    return view('post', [
        'post' => $post]);

});

Route::get('categories/{category:slug}', function (Category $category) {


    return view('posts', [
        'posts' => $category->posts
     ]);

});
