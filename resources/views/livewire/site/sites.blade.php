<div>
    <h1>Liste des sites</h1>
    <input wire:model='search' wire:keyup='set("search", $event.target.value)' name="search" placeholder="Chercher..."
        type="search" class="form-control mb-2">
    <table class="table table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th class="text-center">Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sites as $site)
                <livewire:site.site-show :site="$site" />
            @endforeach
        </tbody>
    </table>
    {{ $sites->links() }}
</div>
