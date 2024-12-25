@extends('layouts.app')


@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create New Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('article.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Article Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Article title" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Article Content</label>
                    <input type="text" name="content" id="content" class="form-control" placeholder="Enter Article content" required>
                </div>
                
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="" disabled selected>Select a Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection