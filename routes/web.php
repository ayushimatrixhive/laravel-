<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\personController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\loginformController;
use App\Http\Controllers\myGuestController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\DB;



use Illuminate\Support\Facades\Log;






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
    return view('welcome');
});

//index page 
Route::get('/index', function () {
    return view('index');
});


//login name 
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

//form page
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

//upadte page with conditions
Route::get('/update/{name}', function ($name) {
    return '  update form name and regexp is  '.$name;
})->where('name', '[A-Za-z]+');

//person page 
Route::get('/person', function () {
    return view('person');
});

//person pg crete controller 
Route::POST('/person', [personController::class,'create']);

//Route::put('/person/{id}', [personController::class, 'update']);


// Route::get('json',function() {
//     return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
//  });

//test page 
 Route::get('/test', function() {
    return view('test',['name'=>'AYUSHI']);
    });

//post page 

Route::get('/post', function () {
    return view('post');
});

Route::get('/post/{post}', function ( $post ) {
   // return view('post');
})->name('post');
// Route::get('/', [PostController::class,'display']);

//url generation
Route::get('/post', [HomeController::class,'index']);

//loginform page
Route::get('/loginform', function () {
    return view('loginform');
});

//validation error 
Route::POST('/loginform', [loginformController::class,'getData']);

//log data create custom log file -> mylog.log
Route::get('/log',function(){

   // \Log::channel('customlog')->info("this is my custom log file");
    dd("done");

    Log::channel('slack')->info('Something happened!');
});

//create custom.log file 
Log::build([
    'driver' => 'single',
    'path' => storage_path('logs/custom.log'),
  ])->info('Something happened!');


//Database get data 
Route::GET('/users1', [UserControllers::class,'index']);



//insert data
// Route::get('/user1', function ($request) {  
//     DB::insert('insert into users(id,name) values(?,?)',['5','XYZ']);  
//     });  

//multiple database connection 
//Route::GET('/list', [myGuestController::class,'list']);

Route::GET('/list', [myGuestController::class,'listdata']);

//Route::GET('/list', [myGuestController::class,'datalist']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::GET('/list1', [MemberController::class,'show']);


