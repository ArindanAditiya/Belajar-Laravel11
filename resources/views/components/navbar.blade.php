<nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-2" style="background-color: rgba(31,41,55,255)">
  <div class="container">
    <a class="navbar-brand" href="#">ard<b><span class="menyala">Punk</span></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link>
        <x-nav-link href="/blog" :active="request()->is('blog')">blog</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">about</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link>
      </div>
    </div>
  </div>
</nav>