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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/links','LinksController@index')->name('links.list')->middleware('auth');
Route::get('/links/create','LinksController@create')->name('links.create')->middleware('auth');
Route::post('/links/create','LinksController@store')->name('links.create')->middleware('auth');
Route::get('/links/{shortlink?}','LinksController@redirect')->name('links.redirect')->middleware('auth');

Route::post('/','LinksController@search')->name('links.search');
Route::get('/','LinksController@getTosearch')->name('links.search');
