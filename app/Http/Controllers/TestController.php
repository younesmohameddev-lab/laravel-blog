<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function testAction(){
        $posts = [
            ['id'=> 1, 'title'=> 'laravel', 'posted_by'=> 'Ahmed'],
            ['id'=> 2, 'title'=> 'flutter', 'posted_by'=> 'mohamed'],        
    ];
        return view('test_view', [
            'posts' => $posts,
        ]);
    }
}
