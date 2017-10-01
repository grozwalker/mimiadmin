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
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

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

    // Категории
    Route::resource('/categories', 'Admin\CategoryController', [
        'as' => 'admin.goods',
        'names' => [
            'index' => 'categories.index',
            'update' => 'categories.update',
            'store' => 'categories.store',
            'destroy' => 'categories.destroy',
        ]
    ]);

    // Показываем все товары (активные + неактивные)
    Route::get('goods/nonactive', [
        'as' => 'goods.nonactive',
        'uses' => 'Admin\GoodController@showNonActive'
    ]);

    // Товары
    Route::get('/goods/get-price', ['as' => 'goods.get-price','uses' => 'Admin\GoodController@getGoodPrice']);
    Route::resource('/goods', 'Admin\GoodController', [
        'as' => 'admin.goods',
        'names' => [
            'index' => 'goods.index',
            'update' => 'goods.update',
            'store' => 'goods.store',
            'destroy' => 'goods.destroy',
        ]
    ]);



    Route::get('goods/category/{category}', ['as' => 'goods.category', 'uses' => 'Admin\GoodController@showCategory']);
    Route::post('goods/category/{category}', ['as' => 'goods.category.store', 'uses' => 'Admin\GoodController@store']);

    Route::get('goods/category/{category}/create', ['as' => 'goods.category.create', 'uses' => 'Admin\GoodController@create']);

    // Закупки
    Route::resource('/purchase', 'Admin\PurchaseController', [
        'as' => 'admin.purchase',
        'names' => [
            'update' => 'purchase.update',
            'store' => 'purchase.store',
            'destroy' => 'purchase.destroy',
        ]
    ]);

    // Клиенты
    Route::resource('/clients', 'Admin\ClientController', [
        'as' => 'admin.clients',
        'names' => [
            'create' => 'clients.create',
            'update' => 'clients.update',
            'store' => 'clients.store',
            'destroy' => 'clients.destroy',
        ]
    ]);

    // Заказы
    Route::post('/orders/add-good', ['as' => 'orders.add-good', 'uses' => 'Admin\OrderController@addGood']);
    Route::resource('/orders', 'Admin\OrderController', [
        'as' => 'admin.orders',
        'names' => [
            'index'     => 'orders.index',
            'update'    => 'orders.update',
            'store'     => 'orders.store',
            'edit'     => 'orders.edit',
            'destroy'   => 'orders.destroy'
        ]
    ]);


});
