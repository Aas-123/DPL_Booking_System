<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', ['as' => 'home',  'uses' =>'HomeController@index'])->name('home');



Route::get('/feed',function(){
	return view('pages.newfeed');

});

Route::get('/admin/login', function(){
	return view('auth.adminlogin');
});

Route::group(['prefix'=>'customer'], function() {

// Login Routes...
    Route::get('login', ['as' => 'customer.login', 'uses' => 'CustomerAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'customer.login.post', 'uses' => 'CustomerAuth\LoginController@login']);
    Route::post('logout', ['as' => 'customer.logout', 'uses' => 'CustomerAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'customer.register', 'uses' => 'CustomerAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'customer.register.post', 'uses' => 'CustomerAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'customer.password.reset', 'uses' => 'CustomerAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'customer.password.email', 'uses' => 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'customer.password.reset.token', 'uses' => 'CustomerAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'customer.password.reset.post', 'uses' => 'CustomerAuth\ResetPasswordController@reset']);
});


Route::get('/customer/home' ,['as' => 'customer.home', 'uses' =>'Index\IndexController@customerhome'])->middleware('customer');


Route::get('/usermanual' , function()
{
    return view('manual');

});

Route::get('/usermanul/downolad' , 'Index\IndexController@usermanul');



