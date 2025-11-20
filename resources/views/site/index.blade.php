@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container mt-2">
        <h1>Liste des sites</h1>
        <a href="{{ route('sites.create') }}">Nouveau</a>
        @if (@isset($sites) and !@empty($sites) and $sites->count() > 0)
            <table class="table table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites as $site)
                        <tr>
                            <td>{{ $site->id }}</td>
                            <td>{{ $site->name }}</td>
                            <td class="d-flex justify-content-end gap-1">
                                <a href="{{ route('sites.edit', $site->id) }}"
                                    class="btn btn-sm btn-outline-success">Modifier</a>
                                <form action="{{ route('sites.destroy', $site->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $sites->links() }} --}}
        @else
            <p>Aucun sites n'est trouvé!!</p>
        @endif

    </div>
@endsection
