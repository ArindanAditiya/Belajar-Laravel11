<nav class="navbar navbar-expand-lg navbar-dark shadow-sm p-2" style="background-color: rgb(1, 34, 71)">
    <div class="container">
      <a class="navbar-brand" href="#">ard<b>Punk</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ request()->is("/") ? 'active btn btn-secondary btn-sm' : '' }}" 
             style="background-color: {{ request()->is("/") ? 'rgb(1, 24, 50)' : 'rgb(1, 34, 71)' }}" 
             aria-current="page" 
             href="/">home</a>

          <a class="nav-link {{ request()->is("blog") ? 'active btn btn-secondary btn-sm' : '' }}" 
             style="background-color: {{ request()->is("blog") ? 'rgb(1, 24, 50)' : 'rgb(1, 34, 71)' }}" 
             aria-current="page" 
             href="/blog">blog</a>

          <a class="nav-link {{ request()->is("about") ? 'active btn btn-secondary btn-sm' : '' }}" 
             style="background-color: {{ request()->is("about") ? 'rgb(1, 24, 50)' : 'rgb(1, 34, 71)' }}" 
             aria-current="page" 
             href="/about">about</a>

          <a class="nav-link {{ request()->is("contact") ? 'active btn btn-secondary btn-sm' : '' }}" 
             style="background-color: {{ request()->is("contact") ? 'rgb(1, 24, 50)' : 'rgb(1, 34, 71)' }}" 
             aria-current="page" 
             href="/contact">contact</a>
        </div>
      </div>
    </div>
  </nav>