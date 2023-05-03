@extends('layouts.main')



@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">Posts : {{ $post->title }}</h1>
                <h2>
                    {{ $post->title }}
                </h2>

                <p>By. <a href="/authors/{{ $post->user->id }}" class="text-decoration-none"> {{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>

                {{-- <h5>{{ $post["author"] }}</h5> --}}
                {{-- {{ $post->body }} --}}
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


            <a href="/blog"class="text-decoration-none btn btn-danger">Back</a>
        </div>
    </div>
</div>

@endsection
