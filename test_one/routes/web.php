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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('test.view');
});

Route::get('/bylcx', 'ControllerName@function_name');
*/

Route::get('', 'IndexController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/cart', 'CartController@index');
Route::get('/categories', 'CategoriesController@index');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/contact', 'ContactController@index');


Route::namespace('Admin')
    ->prefix('admin')
    ->group(function(){
        Route::get('/starter', 'DashboardController@starter');
        Route::get('/dashboard1', 'DashboardController@index');
        Route::get('/dashboard2', 'DashboardController@index2');
});
