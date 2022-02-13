@extends('layout')
@section('content')
@foreach ($posts as $post)
    <article class="{{ $loop->even ? 'foobar' :'' }}">
        <h1>
            <a href="/posts/{{$post->slug }}">
                {{ $post->title; }}
            </a>
        </h1>
        <p>
            By <a href="/authors/{{$post->author->slug}}">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a>
        </p>
        <div>
            <p>
                {{ $post->excerpt; }}
            </p>
        </div>
    </article>
    @endforeach
@endsection