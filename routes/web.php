<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

// Login Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'register', function() {
    return redirect()->route('login');
}]);
Route::post('register', function() {
    return redirect()->route('login');
});

// Password Reset Routes...
Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'],
    function () {

    Route::get('/', ['as' => 'admin.index', 'uses' => 'Admin\AdminController@index']);

//    Route::resource('/admin/goods', ['as' => 'admin.goods', 'uses' => 'Admin\GoodController@index']);

    // Товары
    Route::resource('/goods', 'Admin\GoodController', [
        'as' => 'admin.goods'
    ]);

    // Закупки
    Route::resource('/purchase', 'Admin\PurchaseController', [
        'as' => 'admin.purchase'
    ]);


});
