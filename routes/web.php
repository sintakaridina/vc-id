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

Route::get('/', 'PagesController@index');
Route::get('/', 'Post@view');
Route::get('/login', 'PagesController@loginDeprecated');
Route::get('/register', 'PagesController@SignUpDeprecated');
Route::get('/test', 'PagesController@test');
Route::get('/dashboard', 'User@index');
Route::get('/dashboard', 'Post@user');
Route::get('/write', 'Post@write');
Route::get('/write', 'User@write');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('edit/{id}','Post@edit');
Route::post('update/{id}', 'Post@update');
Route::get('delete/{id}','Post@delete');

Route::get('read/{id}','Post@read');

Route::resource('/store','Post');
