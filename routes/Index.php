<?php

Route::get('/', 'IndexController@index');

Route::get('/home/News' ,   ['as' => 'adminwork.news',  'uses' =>'IndexController@news']);

Route::get('/news/addmodel' , ['as' => 'admin.add',  'uses' =>'IndexController@addmodel']);

Route::get('/news/all' , 'IndexController@show');

Route::post('/news/insert', ['as' => 'admin.newsadd',  'uses' =>'IndexController@insert']);

Route::get('/feed/edit/{id}', 'IndexController@edit');

Route::get('/news/view/{id}', ['as' => 'news.view',  'uses' =>'IndexController@view']);

Route::POST('/news/edit/{id}',  ['as' => 'news.edit',  'uses' =>'IndexController@editfeed']);

Route::get('/news/delete/{id}', ['as' => 'news.delete',  'uses' =>'IndexController@delete']);







?>