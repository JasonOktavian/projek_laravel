@extends('layouts.main')

@section('home')

{{-- Carousel Kalo mo pake --}}
{{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative bg-slate-300 h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logovz.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/MHA.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div> --}}


<h1 class="font-bold text-blue-950 dark:text-blue-300 font-sans text-3xl pt-4 pb-2 text-center max-w-full min-w-full">Publish Your Passion In Your Own Ways</h1>
<h1 class="font-bold text-blue-900 dark:text-blue-200 font-sans inline-block text-xl text-center max-w-full min-w-full">Create Unique and Interesting Blog</h1>

<img src="img/logovz.png" class="min-w-full" alt="">

{{-- <div class="relative">
    <h1 class="font-bold text-blue-950 dark:text-blue-300 font-sans inline-block text-3xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-64 z-10">Publish Your Passion In Your Own Ways</h1>
    <h1 class="font-bold text-blue-900 dark:text-blue-200 font-sans inline-block text-xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[14rem] z-10">Create Unique and Interesting Blog</h1>
    <div class="w-3/5 h-3/4 bg-[#3f37c9] dark:bg-[#144272] dark:text-white rounded-t-lg absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[33%] z-10">
        <div class="bg-white dark:bg-gray-900 dark:text-white rounded-t-lg absolute w-2/3 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[42%] text-center">
            <h1 class="text-2xl bg-[#3a0ca3] dark:bg-[#0A2647] rounded-t-lg font-bold p-6">Technology Update</h1>
            <h1 class="font-bold p-2">3 Easy Steps To Build Your Own Website</h1>
            <h1 class="font-thin text-left p-3">Monday, 17 January 2023</h1>
            <img src="img/imge.png" class="transform content-cover m-auto" alt="">
        </div>
        <img src="img/net.svg" class="rounded-t-lg object-contain" alt="">
    </div>
    <img src="/img/bgi.svg" class="opacity-40 min-w-full -z-50" alt="">
</div> --}}

<div class="bg-slate-100 dark:bg-gray-800">
    <div class="container mx-auto">
test
    </div>
</div>

@endsection

{{-- @section('container')
<div>Ini isi dari home/landing page</div>
@endsection --}}
