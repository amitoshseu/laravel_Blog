<?php

Route::get('/','PostController@index');

Route::get('/posts/create','PostController@create');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}','PostController@show');

Route::post('/posts/{post}/comments','CommentsController@store');



Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');



Route::get('/login','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');





//Eloquent model => Post
//controller  => PostsController
//migration  => create_post_table

