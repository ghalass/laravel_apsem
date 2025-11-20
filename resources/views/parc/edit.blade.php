@extends('master')

@section('title')
    Parcs
@endsection

@section('content')
    <div class="container">
        {{-- <pre> {{ var_dump($parc) }}</pre> --}}
        <h1>Modifier un parc</h1>
        <a href="{{ route('parcs.index') }}">parcs</a>
        <form method="POST" action="{{ route('parcs.update', $parc->id) }}" class="form-control">
            @csrf
            @method('PATCH')
            <input class="form-control mb-2" type="text" value="{{ old('name', $parc->name) }}" name="name"
                placeholder="Nom du parc" autocomplete="off">
            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror
            <select class="form-control mb-2" name="typeparc_id">
                <option value="">------- Choisir un typeparc</option>
                @foreach ($typeparcs as $typeparc)
                    <option value="{{ $typeparc->id }}"
                        {{ old('typeparc_id', $parc->typeparc_id) == $typeparc->id ? 'selected' : '' }}>
                        {{ $typeparc->name }}
                    </option>
                @endforeach
            </select>
            @error('typeparc_id')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror
            <button class="btn btn-md btn-outline-primary">Modifier</button>
        </form>
    </div>
@endsection
