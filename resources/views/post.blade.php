<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:header>{{ $header }}</x-slot:header>
  

  <article class="container mb-2 || border-bottom">
    <a class="text-dark" href="/posts/{{ $post["id"] }}"><h2>{{ $post["articleTitle"] }}</h2></a>
    <p><a href="#">{{ $post["author"] }}</a> | <span>16 Desember 2005</span></p>
    <p>
      {{ Str::limit($post['body'], 230, "...") }}    
      <br>
      <a href="/post/{{ $post["id"] }}">Read More &raquo;</a> 
    </p>
  </article>

</x-layout>