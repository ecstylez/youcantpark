<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 *  setup parent link routes
 */
Route::get('/', 'HomeController@index');
Route::get('/terrible-parkers', 'PagesController@terribleParkers');
Route::get('/notice-them', 'PagesController@noticeThem');
Route::get('/expose-them', 'PagesController@exposeThem');
Route::get('/get-them', 'PagesController@getThem');
Route::get('/contact-us', 'PagesController@contactUs');
Route::get('/get-cards', 'PagesController@getCards');