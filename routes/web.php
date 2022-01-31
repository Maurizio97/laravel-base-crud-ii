<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', 'HomeController@home') -> name('home');
// Route::get('/film/show/{id}', 'HomeController@show') -> name('show');

// Route::get('/film/create', 'HomeController@create') -> name('create');
// Route::post('/film/store', 'HomeController@store') -> name('store');

// Route::get('/film/edit/{id}', 'HomeController@edit') -> name('edit');
// Route::post('/film/update/{id}', 'HomeController@update') -> name('update');

// Route::get('/film/delete/{id}', 'HomeController@delete') -> name('delete');

//---------------------------------------------------------------------------------------------------------------------//

//cRud: Read
Route::get('/users', 'UserController@userHome') -> name('userHome');
Route::get('/user/show/{id}', 'UserController@userShow') -> name('userShow');

// Crud: Create
Route::get('/user/create', 'UserController@userCreate') -> name('userCreate');
Route::post('/user/store', 'UserController@userStore') -> name('userStore');