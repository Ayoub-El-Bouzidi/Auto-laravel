@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{$article['title']}}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{$article['content']}}</p>
        </div>
        <div class="card-footer">
            <a href="/dashboard" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </div>
@endsection
