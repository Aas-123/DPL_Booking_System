<?php

Route::get('/booking', 'BookingController@book');

Route::get('/home/admin' ,   ['as' => 'adminwork.admin',  'uses' =>'BookingController@admin']);

Route::get('/home/addmodel', ['as' => 'admin.addmodel',  'uses' =>'BookingController@addmodel']);

Route::post('/home/insert',  ['as' => 'admin.store',  'uses' =>'BookingController@insert']);


Route::get('customer/home/booking' ,  ['as' => 'customer.booking',  'uses' =>'BookingController@booking']);

Route::get('customer/booking/stadium', ['as' => 'booking.seat',  'uses' =>'BookingController@seat']);

Route::get('/book/form' , 'BookingController@bookformAS' );

Route::post('/book/insert' , ['as'=>'book.insert', 'uses'=>'BookingController@bookinsert']);

Route::get('/home/bookstatus', ['as'=>'admin.bookstatus' , 'uses'=>'BookingController@bookstatus']);

Route::get('/mail/send/{id}', ['as'=>'admin.mail', 'uses'=>'BookingController@sendmail']);

Route::get('/mail/token' , ['as'=>'mail.token', 'uses'=>'BookingController@mailtoken']);


Route::get('/customer/home/changepassword' ,['as'=>'customer.password' , 'uses'=>'BookingController@changepassword']);


Route::post('/customer/home/changepassword/{id}', ['as'=>'password.update' , 'uses'=>'BookingController@updatepassword']);



?>