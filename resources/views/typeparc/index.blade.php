@extends('master')

@section('title')
    Liste des Typeparcs
@endsection

@section('content')
    <div class="container mt-2">
        <h1>Liste des typeparcs</h1>
        <a href="{{ route('typeparcs.create') }}">Nouveau</a>
        @if (@isset($typeparcs) and !@empty($typeparcs) and $typeparcs->count() > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typeparcs as $typeparc)
                        <tr>
                            <td>{{ $typeparc->id }}</td>
                            <td>{{ $typeparc->name }}</td>
                            <td class="d-flex justify-content-end gap-1">
                                <a href="{{ route('typeparcs.edit', $typeparc->id) }}"
                                    class="btn btn-sm btn-outline-success">Modifier</a>
                                <form action="{{ route('typeparcs.destroy', $typeparc->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $typeparcs->links() }} --}}
        @else
            <p>Aucun typeparc n'est trouvé!!</p>
        @endif
    </div>
@endsection
