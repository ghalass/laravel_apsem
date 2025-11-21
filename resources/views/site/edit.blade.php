@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container">
        <h1>Modifier un site</h1>
        <a href="{{ route('sites.index') }}">Sites</a>

        <form method="POST" action="{{ route('sites.update', $site->id) }}">
            @csrf
            @method('PATCH')

            <input type="text" name="name" placeholder="Nom du site" autocomplete="off"
                value="{{ old('name', $site->name) }}"
                class="form-control mb-2 {{ $errors->has('name') ? 'is-invalid' : '' }}">

            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror

            <button class="btn btn-md btn-outline-primary mb-2">Modifier</button>
        </form>

    </div>
@endsection
