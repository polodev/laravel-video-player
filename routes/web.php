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

Route::get('/', function () {
	return redirect(route('series.index'));
});

Route::resource('/video', 'VideoController');
Route::resource('/series', 'SeriesController');
Route::post('/series_video_generate/{series}', 'SeriesController@generate_videos')->name('series.generate_videos');
Route::resource('/topic', 'TopicController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
