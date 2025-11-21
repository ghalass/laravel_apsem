@extends('master')

@section('title')
    Sites
@endsection

@section('content')
    <div class="container mt-2">
        <a href="{{ route('sites.index') }}">Sites</a>
        <livewire:site-create />
    </div>
    {{-- <div class="container">
    <h1>Ajouter un nouveau site</h1>

        <form method="POST" action="{{ route('sites.store') }}">
            @csrf

            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom du site" autocomplete="off"
                class="form-control mb-2 {{ $errors->has('name') ? 'is-invalid' : '' }}">

            @error('name')
                <p class="text-danger text-sm fst-italic">{{ $message }}</p>
            @enderror

            <button class="btn btn-md btn-outline-primary mb-2">Ajouter</button>
        </form>


    </div> --}}
@endsection
