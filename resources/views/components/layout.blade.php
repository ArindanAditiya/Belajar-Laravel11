<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- costume --}}
    <link rel="stylesheet" href="{{ asset("makeCss/costumize.css") }}">
    
    {{-- bootsrtap5 --}}
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}">
  </head>
  <body>
    <x-navbar>{{ $navbar }}</x-navbar>
    <x-header>{{ $header }}</x-header>
    <div class="container mt-3">
        {{ $slot }}
    </div>
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>