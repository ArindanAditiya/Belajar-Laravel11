<a 
    {{ $attributes }}
    class="nav-link {{ $active ? 'active btn btn-secondary btn-sm' : '' }}" 
    style="background-color: {{ $active ? 'rgba(16,24,38,255)' : 'rgba(31,41,55,255)' }}" 
    aria-current="page" 
    href="/">
    {{ $slot }}
</a>
