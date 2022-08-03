<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/loginpanel', function () {
    return view('login');
});

Route::post("/login",[UserController::class,"login"]);