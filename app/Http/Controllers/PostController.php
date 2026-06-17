<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $posts = [
            ['id'=> 1, 'title'=> 'laravel', 'posted_by'=> 'Ahmed'],
            ['id'=> 2, 'title'=> 'flutter', 'posted_by'=> 'mohamed'],        
    ];
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($postId){
        
        $posts = [
            ['id'=> 1, 'title'=> 'laravel', 'posted_by'=> 'Ahmed', 'description'=> 'this is my second programming language'],
            ['id'=> 2, 'title'=> 'flutter', 'posted_by'=> 'mohamed', 'description'=> 'this is my first programming language'],        
    ];
    return view('posts.show',[
        'posts'=> $posts,
        'postId'=> $postId,
    ]);
    }
}
