<li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
        <a href="/dashboard/articles/{{$article['id']}}" class="fw-bold text-decoration-none">{{$article['title']}}</a>
    </div>
    <div>
        <a href="/dashboard/articles/{{$article['id']}}/edit" class="btn btn-sm btn-outline-primary me-2">Modifier</a>
        <form action="/dashboard/articles/{{$article['id']}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
        </form>
    </div>
</li>
