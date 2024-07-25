<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager_controller;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\UserController;
use App\Http\controllers\AuthController;

Route::get('/manager_page', function () {
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

Route::post('/register-user', [UserController::class, 'store']);
Route::post('/login-user', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

//routes create the product
route::get('/create',[Manager_controller::class, 'index'])->name('create_page');
route::post('/create',[Manager_controller::class, 'create_product'])->name('data_storage');

//route displaying to the seller
route::get('/manager_page',[Manager_controller::class, 'display'])->name('home_display');

//routes to edit product
route::post('/manager_page/edit/{name}',[Manager_controller::class, 'update'])->name('update_data');
route::get('/manager_page/edit/{name}',[Manager_controller::class, 'update_page'])->name('edit_page');

//route to delete data
route::delete('/manager_page/{name}',[Manager_controller::class, 'delete'])->name('delete_data');

