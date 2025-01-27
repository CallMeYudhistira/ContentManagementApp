<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function(){
    Route::get("/login", "loginPage")->name('loginPage');
    Route::post("/login", "login")->name("login");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/users', function(){
    return view('users.index');
})->name('users.index');