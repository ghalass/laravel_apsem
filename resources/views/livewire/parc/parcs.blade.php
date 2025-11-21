<div>
    <h1>Liste des parcs</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Typeparc</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcs as $parc)
                <tr>
                    <td>{{ $parc->id }}</td>
                    <td>{{ $parc->name }}</td>
                    <td>{{ $parc->typeparc->name }}</td>
                    <td class="d-flex justify-content-end gap-1">
                        <a href="{{ route('parcs.edit', $parc->id) }}" class="btn btn-sm btn-outline-success">Modifier</a>
                        <form action="{{ route('parcs.destroy', $parc->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
