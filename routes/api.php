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

Route::get('brands', 'API\BrandsController@index');
Route::post('brands', 'API\BrandsController@create');
Route::get('brands/{id}', 'API\BrandsController@show');

Route::get('posts', 'API\PostsController@index');
Route::post('posts', 'API\PostsController@create');
Route::get('posts/{id}', 'API\PostsController@show');

Route::get('users', 'API\UsersController@index');
Route::post('users', 'API\UsersController@create');
Route::get('users/{id}', 'API\UsersController@show');
