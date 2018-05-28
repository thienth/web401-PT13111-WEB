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

// Route::get('/{name?}/{age?}', function ($name = '', $age = 1) {
// 	$desc = "<i>Day la noi dung cua 1 the html</i>";
//     return view('homepage', [	'x' => $name, 
//     							'y' => $age,
// 								'desc' => $desc
// 							]);
// });

Route::view('/', 'demo');
