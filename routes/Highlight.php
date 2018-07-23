<?php

Route::get('/highlight', 'highlightController@games');

Route::get('/home/Highlight' ,    ['as' => 'adminwork.highlight',  'uses' =>'highlightController@highlight']);

Route::get('/highlight/addmodel', ['as' => 'highlight.add',  'uses' =>'highlightController@addmodel']);

Route::post('/highlight/insert',  ['as' => 'highlight.insert',  'uses' =>'highlightController@insert']);

Route::get('/highlight/view/{id}',['as' => 'highlight.view',  'uses' =>'highlightController@view']);

Route::post('/highlight/edit/{id}', ['as'=>'highlight.edit', 'uses'=>'highlightController@edit']);

Route::get('/highlight/delete/{id}', ['as'=>'highlight.delete', 'uses'=>'highlightController@delete']);



?>