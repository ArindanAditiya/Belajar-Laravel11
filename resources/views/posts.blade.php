<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:navbar>{{ true }}</x-slot:navbar>
  <x-slot:header>{{ $header }}</x-slot:header>
  
  @foreach ( $posts as $post )    
  <article class="container mb-2 || border-bottom">
    <a class="text-dark" href="/posts/{{ $post["slug"] }}"><h2>{{ $post["articleTitle"] }}</h2></a>
    <p><a href="#">{{ $post["author"] }}</a> | <span>{{ $post->created_at->diffForHumans() }}</span></p>
    <p>
      {!! Str::limit($post['body'], 230, "...") !!}    
      <br>
      <a href="/posts/{{ $post["slug"] }}">Read More &raquo;</a> 
    </p>
  </article>
  @endforeach

</x-layout>