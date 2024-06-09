<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login',[
        "name" => "login",
        "email" => "login@example.com",
    ]);
});
Route::get('/register', function () {
    return view('auth/register',[
        "name" => "login",
        "email" => "login@example.com",
    ]);
});
