<?php

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


Route::get('/', 'HomeController@index')->name('homepage');

Route::get('search', 'HomeController@search')->name('search');

Route::get('admin/post/add', 'AdminController@add')->name('post.add');
Route::post('admin/post/add', 'AdminController@save');



Route::get('danh-muc/{slug}', 'HomeController@cateList')->name('cate.list');
Route::get('/{slug}', function($slug){
	$post = App\Post::where('slug', $slug)->first();
	return view('detail', ['post' => $post]);
})->name('detail.post');












