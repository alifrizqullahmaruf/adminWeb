<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman home
Route::get('/home', [ExpenseController::class, 'boomsport'])->name('home');

// Route untuk login
Route::post('/', [AuthController::class, 'login'])->name('login');

// Route untuk halaman login
// Route::get('/', function () {
//     return view('auth/login',[
//         "name" => "login",
//         "email" => "login@example.com",
//     ]);
// });

// Route untuk halaman register
Route::get('/register', function () {
    return view('auth/register',[
        "name" => "login",
        "email" => "login@example.com",
    ]);
});
Route::get('/', function () {
    return view('pages/home',[

    ]);
});