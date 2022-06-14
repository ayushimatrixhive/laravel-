<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\personController;



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

Route::get('/login/update', function () {
    return view('login');
})->name('update');


//id show in route file
Route::get('/login/{id}', function ($id) {
    return '  login id is '.$id;
});

//controller 

Route::get('/user/{users}', [UserController::class,'show']);

//view route
Route::get('/register', function () {
    return view('register');
});

//name show in route file
Route::get('/register/{name?}', function ($name = null) {
    return '  register name is '.$name;
});

//redirect routes
Route::redirect('/login','/form');

//view routes
Route::view('/update', 'update', ['name' => 'Ayushi']);


Route::get('/form', function () {
    return view('form');
});

//group middleware
Route::group(['middleware'=>['protectedPag']],function(){
    Route::view('form','form');
});

//Regular Expression Constraints
Route::get('/login/{id}', function ($id) {
    return '  login id and regexp is  '.$id;
})->where('id', '[0-9]+');


Route::get('/update/{name}', function ($name) {
    return '  update form name and regexp is  '.$name;
})->where('name', '[A-Za-z]+');


Route::get('/person', function () {
    return view('person');
});

Route::POST('/person', [personController::class,'create']);

Route::put('/person/{id}', [personController::class, 'update']);


Route::get('json',function() {
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
 });

 Route::get('/test', function() {
    return view('test',['name'=>'Virat Gandhi']);
    });