<x-layout>
    <h1> {{$post->title;}} </h1>
    <p>
        <h4>Category: <a href="#">{{$post->category->name}}</a></h4>
    </p>
    <article>
         {!!$post->body;!!}
    </article>

    <a href="/">Go Back</a>

</x-layout>




