@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>

     <p>By. <a href="/blog?author=/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <h5>{{ $post["autor"] }}</h5>
    
    {!!  $post->body !!}

</article>

<a href="/posts" class="d-block mt-3">Back</a>
@endsection