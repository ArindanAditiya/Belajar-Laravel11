
<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:navbar>{{ $post["slug"] }}</x-slot:navbar>
  <x-slot:header>{{ $header }}</x-slot:header>
  
  <article class="container mb-2 || border-bottom">
    <h2>{{ $post["title"] }}</h2>
    <p><a href="#">{{ $post["author"] }}</a> | <span>{{ $post->created_at->diffForHumans() }}</span></p>
    <p>
      {!! $post['body'] !!}    
      <br>
      <a href="/posts">&laquo; Back</a> 
    </p>
  </article>

</x-layout>
