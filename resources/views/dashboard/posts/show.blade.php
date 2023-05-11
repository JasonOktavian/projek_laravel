@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2">{{ $post->title }}</h1>
</div>
<div class="container">
    <div class="row justify-content-start my-3">
        <div class="col-lg-8">

                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="border-0 btn btn-outline-danger btnn" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i> Delete</button>
                </form>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="border-0 btn btn-outline-secondary btnn"><i class="bi bi-clock-history"></i> Update</a>

                {{-- <h5>{{ $post["author"] }}</h5> --}}
                {{-- {{ $post->body }} --}}
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5 text-lg-start">
                    {!! $post->body !!}
                </article>


            <a href="/dashboard/posts"class="text-decoration-none btn btn-danger pd-3"><i class="bi bi-arrow-bar-left"></i> Back to all</a>
        </div>
    </div>
</div>
@endsection


