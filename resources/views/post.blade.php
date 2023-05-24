@extends('layouts.main')

@section('container')
    <div class="row justify-start mx-3 my-2">
        <div class="col-span-3">
            <h1 class="mb-1 text-5xl font-extrabold dark:text-white">{{ $post->title }}</h1>
            <h6 class="mb-3 text-2xl font-semibold text-gray-600 dark:text-gray-400">an article discussing about <a href="/blog?category={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></h6>
            <p class="font-semibold text-gray-600 dark:text-gray-400">By. <a href="/blog?user={{ $post->user->username }}" class="underline-none font-bold text-black dark:text-white"> {{ $post->user->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="mb-1 w-auto h-[350px] object-fill border-solid border-4 border-white rounded-md drop-shadow-xl" alt="{{ $post->category->name }}">

                </div>
                @else
                <img src="https://source.unsplash.com/800x350?{{ $post->category->name }}" class="mb-1 object-contain" alt="{{ $post->category->name }}">

                @endif
                <hr class="h-px my-8 w-9/12 bg-gray-400 border-0 dark:bg-blue-900">

                <article class="w-9/12 bg-white dark:bg-gray-900 dark:text-white rounded-md text-justify mb-5">
                    <div class="py-4 px-6 block indent-2">
                        {!! $post->body !!}
                    </div>
                </article>
                {{-- <div class="mb-5"> --}}
                    <a href="/blog" class="bg-transparent inline-block mb hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mb-5 over">Go Back</a>
                {{-- </div> --}}
            </div>
        </div>
        {{-- <a href="/blog"class="bg-transparent mb hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Back</a> --}}

 @endsection
