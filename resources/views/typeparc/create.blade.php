@extends('master')

@section('title')
    Ajouter un Typeparc
@endsection

@section('content')
    <div class="container">
        <h1>Ajouter un nouveau typeparc</h1>
        <a href="{{ route('typeparcs.index') }}">Typeparcs</a>
        <form method="POST" action="{{ route('typeparcs.store') }}">
            @csrf
            <input value="{{ old('name') }}" class="form-control mb-2" type="text" name="name"
                placeholder="Nom du typeparc" autocomplete="off">
            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror
            <button class="btn btn-md btn-outline-primary">Ajouter</button>
        </form>
    </div>
@endsection
