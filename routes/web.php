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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/myalbum', 'AlbumsController@myalbum');
Route::get('/myalbum/create', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');
Route::post('/myalbum/store', 'AlbumsController@store');

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');

Route::get('/viewAlldownloadfile', 'DownloadController@downfunc');
Route::get('/download/{$id}', 'DownloadController@download' );

//important files
Route::post('/store/file', 'FilesController@store');	
Route::get('/create', 'DownloadController@getdownload');

//event materials
Route::get('/eventscreate', 'DownloadController@getevents');
Route::post('/store/event', 'EventfilesController@store');

Route::get('/viewdownloadfile', 'DownloadController@getdownload');