<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', [
  'uses' => 'ProductsController@index',
  'as'   => 'product_index_path'
]);

Route::get('/product/new', [
  'uses' => 'ProductsController@newproduct',
  'as'   => 'product_new_path'
]);

Route::post('/product/new', [
  'uses' => 'ProductsController@create',
  'as'   => 'product_create_path'
]);

Route::post('/product/search', [
  'uses' => 'ProductsController@store',
  'as'   => 'product_store_path'
]);

Route::get('/product/list', [
  'uses' => 'ProductsController@listProducts',
  'as'   => 'product_list_path'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
