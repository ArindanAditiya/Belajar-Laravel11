
<nav class="navbar navbar-expand-lg navbar-dark bg-color-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">ard<b><span>Punk</span></b></a>
    
    <!-- Navbar Toggler buat Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><x-nav-link href="/" :active="request()->is('/')">home</x-nav-link></li>
        <li class="nav-item"><x-nav-link href="/posts" :active="request()->is('posts') || request()->is('posts/' . $slot)">blog</x-nav-link></li>        
        <li class="nav-item"><x-nav-link href="/about" :active="request()->is('about')">about</x-nav-link></li>
        <li class="nav-item"><x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link></li>
      </ul>

      <!-- Dropdown Profile -->
      <div class="dropdown ms-auto">
        <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('img/ppicon.jpg') }}" alt="Profile" class="rounded-circle" width="40" height="40">
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>

    </div>
  </div>
</nav>
