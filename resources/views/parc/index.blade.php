@extends('master')

@section('title')
    Parcs
@endsection

@section('content')
    <div class="container mt-2">
        <a href="{{ route('parcs.create') }}">Nouveau</a>
        <livewire:parcs />
        {{-- @if (@isset($parcs) and !@empty($parcs) and $parcs->count() > 0)
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
                                <a href="{{ route('parcs.edit', $parc->id) }}"
                                    class="btn btn-sm btn-outline-success">Modifier</a>
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
        @else
            <p>Aucun parc n'est trouvé!!</p>
        @endif --}}
    </div>
@endsection
