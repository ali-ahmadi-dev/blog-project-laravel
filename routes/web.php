<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});


// dashboard route

Route::group(['prefix' => 'dashboard'] , function(){
    Route::get('/' , function(){
        return view('dashboard.index');
    });
});




//Auth Route


Route::get('/login' , function(){
    return view('auth.login');
});

Route::get('/register' , function(){
    return view('auth.register');
});