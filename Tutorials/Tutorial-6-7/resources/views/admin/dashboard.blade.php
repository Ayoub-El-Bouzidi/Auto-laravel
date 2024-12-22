@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5">Welcome to the Dashboard</h1>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
    <h2 class="mb-4">Liste des Articles <a href="/dashboard/articles/create" class="btn btn-primary ms-2">Create</a></h2>
    <ul class="list-group">
        @foreach ($articles as $article)
            <li class="list-group-item">
                <x-article-card :article="$article" />
            </li>
        @endforeach
    </ul>
@endsection