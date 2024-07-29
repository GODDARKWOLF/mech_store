<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager_controller;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\UserController;
use App\Http\controllers\AuthController;

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


/* manager routes */ 
Route::get('/manager',function(){
    return view('manager.mhome');
})->name('manager_home');

//routes create the product
route::get('/create',[Manager_controller::class, 'index'])->name('create_page');
route::post('/create',[Manager_controller::class, 'create_product'])->name('data_storage');

//route displaying to the seller
route::get('/manager',[Manager_controller::class, 'display'])->name('home_display');

//routes to edit product
route::get('/manager/edit/{id}',[Manager_controller::class, 'update_page'])->name('edit_page');
route::put('/manager/edit/{id}',[Manager_controller::class, 'update'])->name('update_data');

//route to delete data
route::delete('/manager/{id}',[Manager_controller::class, 'delete'])->name('delete_data');


/* User routes */
route::get('/user', function(){
    return view('user.uhome');
})->name('user_name');

//route to display what items are available for purchase
route::get('/user',[User_controller::class, 'display'])->name('user_display');