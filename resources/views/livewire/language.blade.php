<div class="d-flex align-items-center">
    <li class="nav-item d-none d-sm-inline-block">
        <a wire:navigate href="{{ route('ar') }}"
            class="nav-link px-1 {{ app()->getLocale() === 'ar' ? 'active text-bold border-bottom border-3 border-danger' : '' }}">AR</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a wire:navigate href="{{ route('fr') }}"
            class="nav-link px-1 {{ app()->getLocale() === 'fr' ? 'active text-bold border-bottom border-3 border-danger' : '' }}">FR</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a wire:navigate href="{{ route('en') }}"
            class="nav-link px-1 {{ app()->getLocale() === 'en' ? 'active text-bold border-bottom border-3 border-danger' : '' }}">EN</a>
    </li>
</div>
