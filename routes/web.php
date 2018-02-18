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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function (){
  Route::resource('users','UsersController');
  Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'admin.users.destroy'
  ]);

});

Route::resource('products','ProductsController');
Route::get('products/{id}/destroy', [
  'uses' => 'ProductsController@destroy',
  'as' => 'admin.products.destroy'
]);

Auth::routes();
