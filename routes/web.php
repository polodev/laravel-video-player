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
Route::get('/render-video/{video}', 'VideoController@render_video')->name('render_video');
Route::get('/render-pdf/{video}', 'VideoController@render_pdf')->name('render_pdf');
Route::get('/view-pdf/{video}', 'VideoController@view_pdf')->name('view_pdf');

Route::resource('/series', 'SeriesController');
Route::get('/series-hidden', 'SeriesController@index_hidden');
Route::post('/series_video_generate/{series}', 'SeriesController@generate_videos')->name('series.generate_videos');
Route::post('/series_video_delete/{series}', 'SeriesController@delete_videos')->name('series.delete_videos');
Route::post('/series_video_merge/{series}', 'SeriesController@series_video_merge')->name('series.series_video_merge');

Route::resource('/topic', 'TopicController');
Route::resource('/bookmarks', 'BookmarkController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
