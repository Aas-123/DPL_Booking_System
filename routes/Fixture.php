<?php

Route::get('/fixture', 'FixtureController@matches');

Route::get('/home/points' , ['as' => 'adminwork.points',  'uses' =>'FixtureController@points']);

Route::get('/point/edit/{id}',  ['as' => 'adminwork.model',  'uses' =>'FixtureController@edit']);

Route::post('/point/update/{id}', 'FixtureController@update');

Route::get('/contact', 'FixtureController@contact');

?>