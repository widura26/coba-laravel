<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller{
    
    public function index(){
        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%' )
        //     ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            //"posts" => Post::all()
            //"posts" => Post::latest()->get() //solusi untuk n+1 problem, query yang terlalu banyak, eager loading
            "posts" => Post::latest()->filter(request(['search', 'category']))->get() //solusi untuk n+1 problem, query yang terlalu banyak, eager loading
        ]); //nama file web 
    }

    // public function show($slug){
    //     return view('post', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug)
    //     ]);
    // }

    public function show(Post $post){ //variabel $post menerima data dari web.php route model binding
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]); 
    }
}


?>
