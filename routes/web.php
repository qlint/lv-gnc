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
Route::get('contentdesc', 'PagesController@getContentdesc');

Route::get('morefrom', 'PagesController@getMorefrom');

Route::get('schedule', 'PagesController@getSchedule')->name('schedule');

Route::get('discover', 'PagesController@getDiscover')->name('discover');

Route::resource('digital', 'Data4pageController');

Route::get('portal', 'PagesController@getPortal')->name('portal');

Route::get('login', 'PagesController@getLogin')->name('login');

Route::get('faqs', 'PagesController@getFaqs')->name('faqs');

Route::get('contacts', 'PagesController@getContacts')->name('contacts');

Route::get('cloud', 'PagesController@getCloud')->name('cloud');

Route::get('games', 'PagesController@getGames')->name('games');

Route::get('music', 'PagesController@getMusic')->name('music');

Route::get('movies', 'PagesController@getMovies')->name('movies');

Route::get('tv', 'PagesController@getTv')->name('tv');

Route::get('free', 'PagesController@getFree')->name('free-stuff');

Route::get('/', 'PagesController@getIndex')->name('home');
