@extends('layouts.dashboard')

@section('title', 'Edit Article')

@section('content')
    <h1 class="mb-4">Edit Article</h1>
    <form action="/dashboard/articles/{{$article['id']}}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$article['title']}}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu :</label>
            <textarea name="content" id="content" class="form-control" required>{{$article['content']}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection
