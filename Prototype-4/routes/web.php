<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleControlle;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

Route::post('/articles', [ArticleControlle::class, 'store'])->name('article.store');


Route::get('/articles/create', [ArticleControlle::class, 'create'])->name('article.create');
Route::get('/articles', [ArticleControlle::class, 'index'])->name('article.index');
