@extends('dashboard.layouts.main')

@section('container')
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}, Posts</h1>
</div>

@if (session()->has('success'))
<div class="d-flex justify-content-center">
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
</div>
@endif

<div class="d-flex justify-content-center">

<div class="table-responsive col-lg-8">

    <a href="/dashboard/posts/create" class="btn btn-outline-success mb-3 btnn">Create New Post</a>
    <table class="table table-striped table-sm justify-content-center">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $post )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="border-0 btn btn-outline-info btnn"><span class="bi bi-book"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 btn btn-outline-danger btnn" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="border-0 btn btn-outline-secondary btnn"><i class="bi bi-clock-history"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div> --}}
<h1 class="text-2xl text-center mb-2 font-bold">{{ Auth::user()->name }}, Posts</h1>

{{-- @if (session()->has('success'))
<div class="d-flex justify-content-center">
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
</div>
@endif --}}

<a href="/dashboard/posts/create" class="mb-3 bg-green-500 p-4 inline-block rounded-md">Create New Post</a>

<div class="">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-3">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $post )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $posts->firstItem() + $loop->index }}
                </th>
                <td class="px-6 py-4">
                    {{ $post->title }}
                </td>
                <td class="px-6 py-4">
                    {{ $post->category->name }}
                </td>
                <td class="px-6 py-4 justify-center items-center flex">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="w-1/2 h-20" alt="">
                    @else
                    <P>No Image Has Been Inserted</P>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <a href="/dashboard/posts/{{ $post->slug }}" class="bg-blue-400 p-1 btnn rounded-md"><span class="bi bi-book"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" class="inline-flex" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" data-modal-target="delete" data-modal-toggle="delete" class="bg-red-400 p-1 btnn rounded-md" onclick="return confirm('Are You Sure You Want to Delete {{ $post->title }}')"><i class="bi bi-trash"></i></button>
                        <!-- Main modal -->
                        {{-- <div id="delete" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Are You Sure You Want To Delete {{ $post->title }}
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        This Post will be deleted and will not be able to restore it are you sure?
                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="delete" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >Yes Im Sure</button>
                                        <button data-modal-hide="delete" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-green-400 p-1 btnn rounded-md"><i class="bi bi-clock-history"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{ $posts->links() }}
@endsection

