<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);

Route::post('/addUser', [UserController::class, 'addUser']);

Route::get('/getUsers', [UserController::class, 'getUsers']);

Route::post('/addMailChimpUser', [UserController::class, 'addMailChimpUser']);

Route::post('/deleteUser', [UserController::class, 'deleteUser']);
