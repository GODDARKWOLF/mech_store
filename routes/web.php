<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager_controller;
use App\Http\Controllers\User_controller;

Route::get('/', function () {
    return view('manager/create');
});

route::get('/create',[Manager_controller::class, 'index'])->name('create_page');

Route::post('/create', [Manager_controller::class,'create_product'])->name('data_storage');