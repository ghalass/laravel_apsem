<tr>
    <td>{{ $site->id }}</td>
    <td>{{ $site->name }}</td>
    <td class="text-center">
        @if ($site->active)
            <i class="bi bi-toggle-on text-success text-lg"></i>
        @else
            <i class="bi bi-toggle-off text-lg"></i>
        @endif
    </td>
    <td class="d-flex justify-content-end gap-1">
        <a href="{{ route('sites.edit', $site->id) }}" class="btn btn-sm text-success">
            <i class="bi bi-pencil"></i>
        </a>
        <button wire:click='delete({{ $site->id }})' wire:confirm='Voulez-vous vraiment supprimer ce site ?'
            class="btn btn-sm text-danger">
            <i class="bi bi-trash"></i>
        </button>
    </td>
</tr>
