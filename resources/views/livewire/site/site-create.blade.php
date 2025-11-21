<div>
    <form wire:submit.prevent='submit' method="POST">
        <input wire:model='name' type="text" name="name" placeholder="Nom du site" autocomplete="off"
            class="form-control mb-2" />
        @error('name')
            <p class="text-danger text-sm fst-italic">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-md btn-outline-primary mb-2">
            <i class="bi bi-plus"></i> Ajouter
        </button>
        <button wire:click='resetForm' type="submit" class="btn btn-md btn-outline-primary mb-2">
            <i class="bi bi-x"></i> Reset
        </button>

        <div wire:loading class="spinner-border spinner-border-sm text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>

    </form>
</div>
