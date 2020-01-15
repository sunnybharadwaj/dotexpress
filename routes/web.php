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



Route::get('/', 'PagesController@landing');
Route::get('/voice', 'PagesController@landing');
Route::get('/essay', 'PagesController@landing');


Route::get('/forms/pledge', 'FormsController@pledge');
Route::post('/forms/pledge', 'FormsController@pledge_post');

Route::get('/forms/contact', 'FormsController@contact');
Route::post('/forms/contact', 'FormsController@contact_post');

Route::get('/forms/submission', 'FormsController@submission');
Route::post('/forms/submission', 'FormsController@submission_post');




Route::get('/dev/styles', function() {
    return view('dev_templates/styleguide');
});