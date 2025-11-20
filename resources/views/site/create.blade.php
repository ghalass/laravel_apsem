@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container">
        <h1>Ajouter un nouveau site</h1>
        <a href="{{ route('sites.index') }}">Sites</a>
        <form method="POST" action="{{ route('sites.store') }}" class="form-control">
            @csrf
            <input value="{{ old('name') }}" class="form-control mb-2" type="text" name="name" placeholder="Nom du site"
                autocomplete="off">
            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror
            <button class="btn btn-md btn-outline-primary">Ajouter</button>
        </form>
    </div>
@endsection
