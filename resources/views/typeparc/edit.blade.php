@extends('master')

@section('title')
    Modifier un Typeparc
@endsection

@section('content')
    <div class="container">
        <h1>Modifier un typeparc</h1>
        <a href="{{ route('typeparcs.index') }}">Typeparcs</a>
        <form method="POST" action="{{ route('typeparcs.update', $typeparc->id) }}">
            @csrf
            @method('PATCH')
            <input class="form-control mb-2" type="text" value="{{ old('name', $typeparc->name) }}" name="name"
                placeholder="Nom du typeparc" autocomplete="off">
            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror
            <button class="btn btn-md btn-outline-primary">Modifier</button>
        </form>
    </div>
@endsection
