<?php

Route::get('/', function () {
    return view('models');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('console.index');
    });

    Route::get('brands', 'BrandsController@index');
    Route::get('brands/add', 'BrandsController@create');
    Route::post('brands/add', 'BrandsController@store');

    Route::get('change-password', function () {
        return view('console.change-password');
    });

    Route::get('dashboard', function () {
        return view('console.dashboard');
    });

    Route::get('posts', 'PostsController@index');
    Route::get('posts/add', 'PostsController@create');

    Route::get('users', 'UsersController@index');
    Route::get('users/add', 'UsersController@create');
    Route::post('users/add', 'UsersController@store');
    Route::get('users/{id}/profile', function () {
        return view('console.users.profile');
    });
});

