<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;



//php artisan tinker : make a data into database


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
//migration : seperti version control untuk database. bisa melacak perubahan dalam database lewat codingan 
//laravel yang memungkinkan kita dan tim kita untuk medefinisikan serta mendistribusikan atau membagikan struktur database 
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Widura Hasta",
        "email" => "widurategalrejo@gmail.com",
        "image" => "foto.jpg",
        "desc" => "Halo, nama saya Widura Hasta Sasangka."
    ]);
});

// Route::get('/posts', function () { //nama url function == closures
//     // return view('posts', [
//     //     "title" => "Posts",
//     //     "posts" => Post::all()
//     // ]); //nama file web 
// });
Route::get('/posts',[PostController::class, 'index']); //menggunakan controller

//halaman single 
// Route::get('posts/{slug}', function($slug){
//     return view('post', [
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);

// });
Route::get('posts/{post:slug}', [PostController::class, 'show']); //menggunakan controller

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){ //route model binding
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => "authors",
        'posts' => $author->posts->load('category', 'author'), //eager lazy loading
    ]);
});
