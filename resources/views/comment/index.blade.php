<x-layout>
    <h2>comments in DB</h2>
    @foreach ($comments as $comment )
   <h1 class="text-2xl">{{ $comment->author}}</h1> 
   <h1 class="text-2xl">{{ $comment->content}}</h1> 
   <h1 class="text-2xl">{{ $comment->id}}</h1> 
   <p>{{ $comment->post->title }}</p>
   @endforeach
</x-layout>