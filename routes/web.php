<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\HakAkses;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect()->route('auth.loginPage');
});

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function(){
    Route::get("/login", "loginPage")->name('loginPage');
    Route::post("/login", "login")->name("login");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/users', function(){
    return view('users.index');
})->name('users.index')->middleware(Authenticate::class);

Route::controller(ContentController::class)->middleware(Authenticate::class)->prefix("content")->name("content.")->group(function(){
    Route::get("/", "index")->name("index");
    Route::middleware(HakAkses::class)->group( function(){
        Route::get("/create","create")->name("create");
        Route::get("/management", "show")->name("management");
        Route::get("/{id}/edit", "edit")->name("edit");
    
        Route::post("/", "store")->name("store");
        Route::put("/{id}", "update")->name("update");
    
        Route::delete("/{id}", "destroy")->name("destroy");
    });
});