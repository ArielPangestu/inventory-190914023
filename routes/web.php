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
    return view('welcome');
});

Route::get ('/homepage', function() {
    return view('home', ["name" => "Ariel Pangestu"]);
});

Route::get('/person', 'PersonController@index');

Route::get('/person/sendData', 'PersonController@sendData');

Route::get('/student', 'StudentController@index');

Route::get('/student/sendData', 'StudentController@sendData');

Route::get('my-academic/{course}/{task}/{quiz}/{mid_term}/{final}','StudentController@myCourse');