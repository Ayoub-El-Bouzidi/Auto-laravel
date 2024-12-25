<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleControlle extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('admin.article.create' , compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:100',
            'content'=>'required|max:200',
            'category_id' => 'required|exists:categories,id', // Ensure category exists
        ]);
       Article::create([
        'title' => $request['title'], 
        'content' => $request['content'],
        'user_id' => auth()->id(),
        'category_id' => $request['category_id'],
    ]);
    }
}
