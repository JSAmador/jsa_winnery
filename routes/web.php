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

Route::get('/wines/update', 'AdminWinesController@bulkStore');

Route::get('/wine/order', function() {
    return "Wine order";
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/wines/upload, AdminWinesController@bulkStore');
    Route::get('/admin/orders', 'AdminOrdersController@index');
    Route::get('/admin/tables', 'AdminTablesController@index');
    Route::get('/admin/wines', 'AdminWinesController@index');
    Route::get('/admin/order/process', 'AdminOrdersController@process');
});
