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
    echo "<h2>This is Home Page</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About Page</h2>";
});

Route::get('/contact', function () {
    echo "<h2>This is Contact Page</h2>";
});

Route::get('/test', function(){
    return view('test', ['name' => 'Ngoc Tho']);
});

Route::get('/student/{name}', function($name){
    echo 'Student Name is ' .$name;
});

Route::get('/users/{name}', function($name = "Ngọc Thọ"){
    echo 'User Name is ' .$name;
});

Route::get('/home', 'HomeController@index');
