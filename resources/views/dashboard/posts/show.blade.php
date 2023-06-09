@extends('dashboard.layouts.main')

@section('container')

    <h1 class="text-2xl font-bold text-center mb-3">{{ $post->title }}</h1>

{{-- <div class="container">
    <div class="row justify-content-start my-3">
        <div class="col-lg-8">

                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="border-0 btn btn-outline-danger btnn" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i> Delete</button>
                </form>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="border-0 btn btn-outline-secondary btnn"><i class="bi bi-clock-history"></i> Update</a>

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">

                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                @endif
                <article class="my-3 fs-5 text-lg-start">
                    {!! $post->body !!}
                </article>


            <a href="/dashboard/posts"class="text-decoration-none btn btn-danger pd-3"><i class="bi bi-arrow-bar-left"></i> Back to all</a>
        </div>
    </div>
</div> --}}
<div>
    <form action="/dashboard/posts/{{ $post->slug }}" class="inline-flex" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="bg-red-500 px-3 py-2 rounded-md inline-block btnn" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i> Delete</button>
    </form>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-green-500 px-3 py-2 rounded-md inline-block btnn"><i class="bi bi-clock-history"></i> Update</a>

    @if ($post->image)
        <div class="object-scale-down">
            <img src="{{ asset('storage/' . $post->image) }}" class="mt-3 rounded-lg" alt="{{ $post->category->name }}">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="mt-3 rounded-lg" alt="{{ $post->category->name }}">

    @endif
    <article class="my-3 mx-2">
        {!! $post->body !!}
    </article>


    <a href="/dashboard/posts"class="bg-blue-300 px-3 py-2 rounded-md btnn"><i class="bi bi-arrow-bar-left"></i> Back to all</a>
</div>
@endsection


