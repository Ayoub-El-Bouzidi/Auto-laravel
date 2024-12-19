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
