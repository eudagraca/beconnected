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

Auth::routes(['except' => 'register']);

Route::get('/', 'HomeController@index')->name('home');

// User / Company
Route::get('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Route::get('/profile', 'Auth\UserController@profile')->name('user.profile');

