<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function(){
    Route::get("/login", "loginPage")->name('loginPage');
    Route::post("/login", "login")->name("login");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/users', function(){
    return view('users.index');
})->name('users.index');

Route::controller(ContentController::class)->prefix("content")->name("content.")->group(function(){
    Route::get("/", "index")->name("index");
    Route::get("/create","create")->name("create");
    Route::get("/management", "show")->name("management");
    Route::get("/{id}/edit", "edit")->name("edit");

    Route::post("/", "store")->name("store");
    Route::put("/{id}", "update")->name("update");

    Route::delete("/{id}", "destroy")->name("destroy");
});