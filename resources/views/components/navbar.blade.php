<nav class="navbar navbar-expand-lg navbar-dark | bg-color-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">ard<b><span>Punk</span></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link></li>
        <li class="nav-item"> <x-nav-link href="/posts" :active="request()->is('posts')">blog</x-nav-link></li>
        <li class="nav-item"> <x-nav-link href="/about" :active="request()->is('about')">about</x-nav-link></li>
        <li class="nav-item"> <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link></li>
      </ul>
      <img src="img/ppicon.jpg" alt="" style="width: 30px; height: 30px; border-radius: 100px  ">
    </div>
  </div>
</nav>
