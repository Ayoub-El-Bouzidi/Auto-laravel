<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users' , [UserController::class,'index'])->name('users');
Route::get('/create', [UserController::class , 'create'])->name('createUser');