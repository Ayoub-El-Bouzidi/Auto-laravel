<li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
        <div class="fw-bold text-decoration-none">{{$article['title']}}</div>
    </div>
    <div>
        <form action="/dashboard/articles/{{$article['id']}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
        </form>
    </div>
</li>
