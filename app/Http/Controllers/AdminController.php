<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class AdminController extends Controller
{
    public function add(){

    	$model = new Post();
    	$cates = Category::all();

    	return view('admin.post.form', 
					[	
						'model' => $model,
						'cates' => $cates
					]);
    }

    public function save(Request $rq){
    	if($rq->id == null){
    		$model = new Post();
    	}else{
    		$model = Post::find($rq->id);
    	}

    	$model->fill($rq->all());

    	$model->save();

    	return redirect(route('homepage'));
    }
}
