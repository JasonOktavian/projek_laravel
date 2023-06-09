@extends('dashboard.layouts.main')

@section('container')
<h1 class="text-2xl text-center mb-2 font-bold">{{ Auth::user()->name }}, Categories Management</h1>

@if (session()->has('success'))
<div class="d-flex justify-content-center">
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
</div>
 @endif

    <a href="/dashboard/categories/create" class="mb-3 bg-green-500 p-4 inline-block rounded-md">Create New Category</a>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-3">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Category Name</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($categories as $category )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4">{{ $category->name }}</td>
                <td class="px-6 py-4 justify-center items-center flex">
                    <img src="https://source.unsplash.com/80x80?{{ $category->name }}" alt="">
                </td>
                <td class="px-6 py-4">
                    <form action="/dashboard/categories/{{ $category->slug }}" class="inline-flex" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-red-400 p-1 btnn rounded-md btnn" onclick="return confirm('are you sure to delete this category?')"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="bg-green-400 p-1 btnn rounded-md btnn"><i class="bi bi-clock-history"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection

