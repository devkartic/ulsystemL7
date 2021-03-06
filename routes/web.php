<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('admin/user', 'Admin\UserController', ['except'=>['show', 'create', 'store']]);

Route::namespace('Admin')->prefix('admin')->middleware('can:manage-users')->name('admin.')->group(function (){
    Route::resource('user', 'UserController', ['except'=>['show', 'create', 'store']]);
});
