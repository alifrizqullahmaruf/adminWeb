<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

// Tambahkan route ini
Route::get('/home', [ExpenseController::class, 'boomsport']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/', [AuthController::class, 'login'])->name('login');
Route::get('/', function () {
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
Route::get('/home', function () {
    return view('pages/home');
})->name('pages.home');
