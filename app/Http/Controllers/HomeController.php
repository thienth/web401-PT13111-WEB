<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class HomeController extends Controller
{
    public function index(){
		$posts = Post::all();
		return view('demo', [	'posts' => $posts, 
							]);
    }

    public function search(Request $request){
    	$posts = Post::where('title', 'like', "%$request->keyword%")
						->get();

		return view('demo', [	'posts' => $posts, 
							]);	
    }
}
