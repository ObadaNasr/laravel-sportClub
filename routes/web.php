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

Route::get('/','PagesController@index' );
Route::get('/register','PagesController@register');
Route::get('/login','PagesController@login');
Route::get('/about','PagesController@about');
Route::get('/user','userController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/createMatch', 'HomeController@createMatch')->name('home');
Route::get('/home/addPlayer', 'HomeController@addPlayer')->name('home');


Route::get('/matches/{id}','MatchController@index');
Route::get('/players','UserController@index');
Route::resource('user', 'UserController');
Route::resource('playerInMatch', 'PIM');
Route::resource('match','MatchController');

Route::get('/info/{id}','UserController@show');
Route::get('/matches/info/{id}','PIM@show');

