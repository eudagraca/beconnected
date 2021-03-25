<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('company/login', 'CompanyController@login')
    ->name('company.login');

// User / Company
Route::get('/register', 'Auth\RegisterController@register')
    ->name('register');

Route::post('/register', 'Auth\RegisterController@create')
    ->name('register');

Route::get('/profile', 'Auth\UserController@profile')
    ->name('user.profile');

// District company /
Route::get('distrito/{id}/provincia', 'DistritoController@getDistritos');

Route::get('distrito/{provincia}/provincia', 'DistritoController@getDistritos');

// Company resource
Route::resource('company', 'CompanyController');
Route::resource('company', 'CompanyController');

//Search Company
Route::get('search', 'CompanyController@index');

Route::get('search', 'CompanyController@search')
    ->name('search');

Route::get('company/search','CompanyController@search')
    ->name('company.search');

Route::post('company/search', 'CompanyController@search')
    ->name('company.search');

//Image resource
Route::post('ImageForm/{id}', 'ImagesController@ImageForm')
    ->name('form.ImageForm')
    ->middleware('auth');

Route::any('ImageForm/{id}', 'ImagesController@uploadForm')
    ->name('form.ImageForm')
    ->middleware('auth');

Route::post('uploadImage/{id}', 'ImagesController@UploadSubmit')
    ->name('uploadImage')
    ->middleware('auth');

//Route to send and receive message
Route::get('/message/{userId}', 'MessageController@show')
    ->name('message.show')
    ->middleware('auth');

Route::get('message/home', 'MessageController@index')
    ->name('message.home')
    ->middleware('auth');

Route::get('conversation/{userId}', 'MessageController@conversation')
    ->name('message.conversation')
    ->middleware('auth');

Route::post('conversation/{userId}', 'MessageController@conversation')
    ->name('message.conversation')
    ->middleware('auth');

Route::get('message/home', 'MessageController@index')
    ->name('message.home')
    ->middleware('auth');
Route::get('/message', 'MessageController@index')->name('message');

Route::post('send-message', 'MessageController@sendMessage')
    ->name('message.send-message')
    ->middleware('auth');

Route::get('send-message', 'MessageController@sendMessage')
    ->name('message.send-message')
    ->middleware('auth');


