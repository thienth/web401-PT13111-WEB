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
    public function cateList($slug){
		$cate = Category::where('slug', $slug)->first();
		if(!$cate){
			return "Khong tim thay duong dan";
		}

		$posts = Post::where('cate_id', $cate->id)->paginate(9);
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
