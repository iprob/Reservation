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
    return view('auth.login');
});

Auth::routes();

#Admin
Route::resource('admin', 'AdminController');
#supervisor
Route::resource('supervisor', 'SupervisorController');
#user
Route::resource('/reservation', 'UserController');

Route::get('/home', 'HomeController@index')->name('home');
