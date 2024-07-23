<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager_controller;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\UserController;
use App\Http\controllers\AuthController;

Route::get('/', function () {
    return view('manager/create');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('signup');
});


route::get('/create',[Manager_controller::class, 'index'])->name('create_page');
route::post('/create',[Manager_controller::class, 'store_data'])->name('data_storage');
Route::post('/register-user', [UserController::class, 'store']);
Route::post('/login-user', [AuthController::class, 'login']);
