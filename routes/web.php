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

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'Admin\DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/contest', 'PagesController@contest')->name('contest');
Route::get('/exhibition', 'PagesController@exhibition')->name('exhibition');
Route::get('/winner', 'PagesController@winner')->name('winner');
Route::get('/dash', 'PagesController@dash')->name('dash');
