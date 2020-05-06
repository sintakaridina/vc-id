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
Route::get('/login-deprecated', 'PagesController@loginDeprecated');
Route::get('/signup-deprecated', 'PagesController@SignUpDeprecated');
Route::get('/test', 'PagesController@test');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/write', 'PagesController@write');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
