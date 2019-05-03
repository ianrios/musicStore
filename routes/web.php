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
    return view('index');
});

Route::get('/artists', function () {
	return view('artists');
});

Route::get('/releases', function () {
	return view('releases');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/CYCLE', function () {
	return view('cycle');
});

Route::get('/comingsoon', function () {
	return view('comingsoon');
});
