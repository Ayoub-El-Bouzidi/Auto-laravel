<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Video;

Route::get('/add-article-comment', function () {
    $article = Article::find(1);
    $article->comments()->create(['content' => 'Super article !']);

    $video = Video::create(['title'=>'my video','content'=>'djdkd jhj','user_id'=>1]);
    $video->comments()->create(['content' => 'Vidéo incroyable !']);
    dd(['articles' => [$article,$video]]);
});
Route::get('/',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return 'Admin Dashboard';
})->middleware('role:admin');

Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');

Route::get('/dashboard', function () {
    return 'Bienvenue sur le tableau de bord.';
})->middleware('permission:view dashboard');

Route::get('/manage', function () {
    return 'Gestion des ressources.';
})->middleware('permission:view dashboard,manage resources');


Route::get('/admin', function () {
    return 'Bienvenue sur la page admin.';
})->middleware('role:admin');
