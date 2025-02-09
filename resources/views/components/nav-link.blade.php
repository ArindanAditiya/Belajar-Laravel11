<a 
    {{ $attributes }}
    class="nav-link {{ $active ? 'active btn btn-secondary btn-sm bg-navlink-dark ' : 'bg-color-navbar' }}" 
    aria-current="page" 
    href="/">
    {{ $slot }}
</a>
