<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;

Route::get('/', [SessionsController::class, 'create']);

Route::middleware('guest')->group(function () {
    //Register
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

});

Route::middleware('guest')->group(function () {
    //login
    Route::get('login', [SessionsController::class, 'create']);
    Route::post('login', [SessionsController::class, 'store']);
});

Route::delete('logout', [SessionsController::class, 'destroy'])->middleware('auth');
