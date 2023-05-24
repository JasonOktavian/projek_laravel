@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-5xl text-center font-semibold dark:text-white">{{ $title }}</h1>


<div class="mb-3">
    <div class="col-md-6 mx-auto">
        <form class="flex items-center" action="/blog">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                {{-- icon search --}}
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816a6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" name="search" value="{{ request('search') }}" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="max-w-[77rem] rounded overflow-auto shadow-lg my-4 bg-white mx-auto dark:bg-gray-900 dark:text-white         no-scrollbar">
    @if ($posts[0]->image)
        <div class="px-3 py-2 mx-auto my-auto">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="mx-auto mb-1 w-[1200px] h-[200px] object-contain" alt="{{ $posts[0]->category->name }}">
        </div>
    @else
    <div class="px-3 py-2 mx-auto my-auto">
        <img src="https://source.unsplash.com/1200x200?{{ $posts[0]->category->name }}" class="mx-auto mb-1" alt="{{ $posts[0]->category->name }}">
    </div>

    @endif
    <div class="text-center mb-5">
      <h3 class="font-bold text-xl mb-2"> <a href="posts/{{ $posts[0]->slug }}" class="">{{ $posts[0]->title }}</a> </h3>
      <small class="text-body-secondary">
        <p class="my-2 dark:text-gray-400">By. <a href="/blog?user={{ $posts[0]->user->username }}"class="underline-none">{{$posts[0]->user->name }}</a> in
            <a href="/blog?category={{ $posts[0]->category->slug }}"class="underline-none">{{$posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
        </p>
      </small>
        <p class="text-justify my-2 mx-4 mb-2">{{ $posts[0]->excerpt }}</p>
        {{-- <div class="mt-2"> --}}
            <a href="/posts/{{ $posts[0]->slug }}"class="block mt-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mx-3">Read More</a>
        {{-- </div> --}}
    </div>
</div>

{{-- <div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
      <p class="text-gray-700 text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
</div> --}}

<div class="lg:container">
    <div class="grid grid-rows-2 grid-flow-col mx-auto ">
        @foreach ( $posts->skip(1) as $post)
        <div class="relative md:col-span-2 my-3 mx-auto dark:text-white">
            <div class="max-w-sm rounded overflow shadow-lg bg-white dark:bg-gray-900">
                <div class="absolute px-3 py-2 rounded bg-slate-800 opacity-60">
                    <a href="/blog?category={{ $post->category->slug }}" class="no-underline text-white">{{ $post->category->name }}</a>
                </div>
                @if ($post->image)
                <div style="">
                    <img src="{{ asset('storage/' . $post->image) }}" class="px-3 py-2 w-[384px] h-[241px]" alt="{{ $post->category->name }}">

                </div>
                @else
                <img src="https://source.unsplash.com/1200x750?{{ $post->category->name }}" class="px-3 py-2" alt="{{ $post->category->name }}">

                @endif
                {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
                <div class="px-6 py-4 h-72">
                  <h5 class="font-bold text-xl mb-2 min-h-[82px]">{{ $post->title }}</h5>
                  <small>
                    <p class="mb-2 dark:text-gray-400">By. <a href="/blog?user={{ $post->user->username }}"class="underline-none ">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </p>
                  </small>
                  <p class="text-justify my-4 overflow-auto h-20 no-scrollbar">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}"class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>

</div>

@else
<p class="text-center fs-4" >No Post Found</p>
@endif

{{ $posts->links() }}


@endsection
