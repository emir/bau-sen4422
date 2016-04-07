<?php


Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('news', 'NewsController@index');
Route::get('news/{id}', ['as' => 'news.show', 'uses' => 'NewsController@show']);
