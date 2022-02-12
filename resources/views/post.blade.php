@extends('layout')
@section('content')
<article>
    <h1>
        <a href="/posts/{{ $post->slug }}">
            {{ $post->title; }}
        </a>
    </h1>
    <div>
        <p>
            {!! $post->body; !!}
        </p>
    </div>
</article>
<a href="/">Go Back</a>
@endsection