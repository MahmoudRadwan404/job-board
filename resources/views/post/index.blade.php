<x-layout>
   
    @foreach ($posts as $post )
    <h2 class="text-2xl">{{ $post->title }}</h2>

   <h1>{{ $post->body}}</h1> 
   <h1>{{ $post->id}}</h1> 
    @endforeach
  
</x-layout>