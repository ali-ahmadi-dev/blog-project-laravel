<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.index');
// });

Route::view('/' , 'front.index')->name('home');


// dashboard route

Route::group(['prefix' => 'dashboard'] , function(){
    Route::get('/' , function(){
        return view('dashboard.index');
    });
});




//Auth Route


// Route::get('/login' , function(){
//     return view('auth.login');
// });

Route::view('/login' , 'auth.login')->name('login');
Route::post('/login' , [AuthController::class , 'login'] );
// Route::get('/register' , function(){
//     return view('auth.register');
// });


Route::view('/register' , 'auth.register')->name('register');
Route::post('/register' , [AuthController::class , 'register'] );
Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');