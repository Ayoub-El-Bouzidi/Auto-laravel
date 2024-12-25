<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|max:500'
        ]);
        Category::create([
            'name'=>$request->name
        ]);

        return redirect()->route('category.create')->with('success', 'Category created successfully!');
    }
    public function fetch(){
        $categories = Category::all(); // Fetch categories
        return view('articles.create', compact('categories'));
    }
}
