<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <x-bootstrap5-css></x-bootstrap5-css>
  </head>
  <body>
    <x-navbar></x-navbar>
    <x-header>{{ $header }}</x-header>

    <div class="container mt-3">
        {{ $slot }}
    </div>
    
    <x-bootstrap5-js></x-bootstrap5-js>
  </body>
</html>