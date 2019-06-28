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
    return view('welcome');
})->name('welcome');

Auth::routes();


Route::group(['namespace'=>"Users",'prefix'=>'users'],function(){
    Route::resource('products', 'ProductsController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('products/{id}/transactions','HomeController@transactions')->name('product.transactions');
    Route::get('/transactions','HomeController@allTransactions')->name('user.transactions');
});

Route::group(['namespace'=>"Admin",'prefix'=>'admin','middleware'=>'is_admin'],function(){
    Route::get('', 'AdminController@index')->name('admin.index');
    Route::get('product', 'AdminController@products')->name('admin.products');
    Route::get('users', 'AdminController@users')->name('admin.users');
    Route::get('products/user/{id}','AdminController@userProducts')->name('admin.user.products');
    Route::get('products/{id}','AdminController@payForProduct')->name('admin.pay');
    Route::post('products/{id}/deposit','AdminController@deposit')->name('admin.deposit');
    Route::get('products/{id}/transactions','AdminController@transactions')->name('admin.product.transactions');
    Route::get('user/transactions/{id}','AdminController@userTransactions')->name('admin.user.transactions');
});