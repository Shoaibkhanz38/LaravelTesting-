<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{name}', function ( $name) {
//     // return redirect('contact')

//     echo $name;
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/user', function(){
    return "this is post method";
});

Route::post('/about', function(){
    return "this is get API";
});

Route::post('/user{id}', function(){
    return "this is get API";
});


// Route::get('about',[UserController::class,'show']);
// Route::view('about/','/about');
// Route::view('contact', '/contact')->middleware('protectedPage');
// Route::view('index', '/index');
// Route::view('first', '/first');
// Route::view('noaccess','noaccess');

// Route::get('index', [UserController::class,'index']);
