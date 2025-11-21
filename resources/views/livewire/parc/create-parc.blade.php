<div class="container" wire:init='loadTypeparcs'>
    <h1>Ajouter un nouveau parc</h1>
    <a href="{{ route('parcs.index') }}">parcs</a>
    <form method="POST" action="{{ route('parcs.store') }}">
        @csrf
        <input value="{{ old('name') }}" class="form-control mb-2" type="text" name="name" placeholder="Nom du parc"
            autocomplete="off">
        @error('name')
            <p class="text-danger text-sm fst-italic">{{ $message }}</p>
        @enderror
        <select class="form-control mb-2" name="typeparc_id">
            <option value="">------- Choisir un typeparc</option>
            @foreach ($typeparcs as $typeparc)
                <option value="{{ $typeparc->id }}" {{ old('typeparc_id') == $typeparc->id ? 'selected' : '' }}>
                    {{ $typeparc->name }}</option>
            @endforeach
        </select>
        @error('typeparc_id')
            <p class="text-danger text-sm fst-italic">{{ $message }}</p>
        @enderror
        <button class="btn btn-md btn-outline-primary">Ajouter</button>
    </form>
</div>
