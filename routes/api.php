<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('brands', 'BrandsController@index');
Route::post('brands', 'BrandsController@create');
Route::get('brands/{id}', 'BrandsController@show');

Route::get('posts', 'PostsController@index');
Route::post('posts', 'PostsController@create');
Route::get('posts/{id}', 'PostsController@show');

Route::get('users', 'UsersController@index');
Route::post('users', 'UsersController@create');
Route::get('users/{id}', 'UsersController@show');
