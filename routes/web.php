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

// Route::get('/', function () { return view('index'); });

Route::get('/', 'index@show');

//Route::get('/artists', function () { return view('artists'); });
Route::get('/artists', 'artists@show');

// Route::get('/releases', function () { return view('releases'); });
Route::get('/releases', 'releases@show');

// Route::get('/contact', function () { return view('contact'); });
Route::get('/contact', 'contact@show');

// Route::get('/cycle', function () { return view('cycle'); });
Route::get('/cycle', 'cycle@show');

// Route::get('/comingsoon', function () { return view('comingsoon'); });
Route::get('/comingsoon', 'comingsoon@show');
