<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager_controller;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\UserController;
use App\Http\controllers\AuthController;

Route::get('/', function () {
    return view('manager/mhome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('signup');
});

Route::get('/landing', function () {
    return view('landing');
});

//route displaying to the seller
route::get('/',[Manager_controller::class, 'display'])->name('home_display');

//routes to edit product
route::get('/edit/{name}',[Manager_controller::class, 'update_page'])->name('edit_page');
route::post('/edit/{name}',[Manager_controller::class, 'update'])->name('update_data');

//route to delete data
route::delete('/{name}',[Manager_controller::class, 'delete'])->name('delete_data');

//routes create the product
route::get('/create',[Manager_controller::class, 'index'])->name('create_page');
route::post('/create',[Manager_controller::class, 'create_product'])->name('data_storage');

Route::post('/register-user', [UserController::class, 'store']);
Route::post('/login-user', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

