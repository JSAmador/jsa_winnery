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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/wines', 'WinesController@index');
Route::get('/tables', 'TablesController@index');
Route::get('/table/{id}', 'TablesController@show');
Route::get('/orders', 'OrderController@index');
Route::post('/wine/order', 'OrderController@store');

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/wines/upload, AdminWinesController@bulkStore');
    Route::get('/admin/orders', 'AdminOrdersController@index');
    Route::get('/admin/tables', 'AdminTablesController@index');
    Route::get('/admin/wines', 'AdminWinesController@index');
    Route::post('/admin/orders/{id}/edit', 'AdminOrdersController@edit');
    Route::post('/admin/orders/{id}/process', 'AdminOrdersController@process');
    Route::post('/admin/orders/{id}/deliver', 'AdminOrdersController@deliver');
});
