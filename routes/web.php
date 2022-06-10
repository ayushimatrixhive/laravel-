<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login')->middleware('protected');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/form', function () {
    return view('form');
});

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('login','login');
});
