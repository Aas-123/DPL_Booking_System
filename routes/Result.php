<?php

Route::get('/result', 'ResultController@index');

Route::get('/home/result' , ['as' => 'adminwork.result',  'uses' =>'ResultController@result']);

Route::get('/result/all', 'ResultController@show');

Route::get('/result/addmodel', 'ResultController@addmodel');

Route::post('/result/insert','ResultController@insert');

Route::get('/result/delete/{id}', 'ResultController@delete');



?>