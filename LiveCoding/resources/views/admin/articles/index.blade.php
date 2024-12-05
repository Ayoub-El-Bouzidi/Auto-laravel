@extends('layouts.dashboard')

@section('content')
    <h1 class="mb-4">Liste des Articles</h1>
    <ul class="list-group">
        @foreach ($articles as $article)
            <li class="list-group-item">
                <x-article-card :article="$article" />
            </li>
        @endforeach
    </ul>
@endsection
