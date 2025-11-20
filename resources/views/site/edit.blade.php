@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container">
        <h1>Modifier un site</h1>
        <a href="{{ route('sites.index') }}">Sites</a>
        <form method="POST" action="{{ route('sites.update', $site->id) }}" class="form-control">
            @csrf
            @method('PATCH')
            <input class="form-control mb-2" type="text" value="{{ old('name', $site->name) }}" name="name"
                placeholder="Nom du site" autocomplete="off">
            <button class="btn btn-md btn-outline-primary">Modifier</button>
        </form>
    </div>
@endsection
