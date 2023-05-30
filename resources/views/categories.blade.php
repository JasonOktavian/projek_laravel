@extends('layouts.main')

@section('container')
<h1 class="my-3 font-bold text-blue-950 dark:text-blue-300 font-sans text-3xl pt-4 pb-2 text-center max-w-full min-w-full">Post Categories</h1>
{{-- <div class="grid md:grid-rows-2 md:grid-flow-col mx-auto -z-50 sm:grid sm:grid-rows-3">
    <div class="relative md:col-span-2 my-3 mx-auto dark:text-white">
      @foreach ( $categories as $category )
        <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-white text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div> --}}
<div class="grid md:grid-rows-2 md:grid-flow-col mx-auto">
    @foreach ( $categories as $category )
    <div class="relative md:col-span-2 my-3 mx-auto dark:text-white">
        <div class="max-w-sm rounded overflow shadow-lg bg-white dark:bg-gray-900">
            <a href="/blog?category={{ $category->slug }}">
                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="rounded-t-md" alt="{{ $category->name }}">
                <h5 class="text-black dark:text-white text-center flex-fill p-4 fs-3 bg-inherit">{{ $category->name }}</h5>
            </a>
        </div>
    </div>

    @endforeach
</div>
@endsection
