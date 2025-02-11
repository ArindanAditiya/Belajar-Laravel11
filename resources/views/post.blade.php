
<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:navbar>{{ $post["id"] }}</x-slot:navbar>
  <x-slot:header>{{ $header }}</x-slot:header>
  
  <article class="container mb-2 || border-bottom">
    <h2>{{ $post["articleTitle"] }}</h2>
    <p><a href="#">{{ $post["author"] }}</a> | <span>16 Desember 2005</span></p>
    <p>
      {{ $post['body'] }}    
      <br>
      <a href="/posts">&laquo; Read More</a> 
    </p>
  </article>

</x-layout>
