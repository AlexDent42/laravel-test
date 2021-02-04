<?php

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

Route::get('/', 'PageController@month');

Route::get('/blade/{id}', 'TestController@learnBlade');

Route::get('/user/{id}/{name}', function($id, $name)
{
	return $id.'Its name'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/pages/show/{id}', 'PageController@showOne')->where('id','[0-9]+');

Route::get('/pages/all', 'PageController@showAll');

Route::get('/test/sum/{num1}/{num2}/', 'TestController@sum')->where(['num1'=>'[0-9]+', 'num2'=>'[0-9]+']);




Route::get('/location/{city}/{country}', 'TestController@location');

Route::get('/post/{id}', 'PostController@showOne')->name('one-post');

Route::get('/posts', 'PostController@showAll')->name('all-posts');

Route::get('/product/{category_id}/{product_id}', 'ProductController@showProduct');

Route::get('/product/{category_id}', 'ProductController@showCategory');


Route::get('/test-action', 'TestController@testAction');

Route::get('/response', 'ResponseController@show');



