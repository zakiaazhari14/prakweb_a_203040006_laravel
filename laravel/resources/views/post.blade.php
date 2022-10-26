@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>

    <p>By. ZAki Auliya Azhari in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name  }}</a></p>
    <h5>{{ $post["autor"] }}</h5>
    
    {!!  $post->body !!}

</article>

<a href="/blog">Back</a>
@endsection