<x-layout>
    <h1> {{$post->title;}} </h1>
    <p>
        <a href="/authors/{{$post->author->username}}"><h4>By {{$post->author->name}}</h4></a>
        <h4>Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h4>
    </p>
    <article>
         {!!$post->body;!!}
    </article>

    <a href="/">Go Back</a>

</x-layout>




