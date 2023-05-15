@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}, Categories Management</h1>
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

    <a href="/dashboard/categories/create" class="btn btn-outline-success mb-3 btnn">Create New Category</a>
    <table class="table table-striped table-sm justify-content-center">
        <thead class="text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($categories as $category )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td><img src="https://source.unsplash.com/40x40?{{ $category->name }}" alt=""></td>
                <td>
                    <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="border-0 btn btn-outline-danger btnn" onclick="return confirm('Are you sure to delete this category?')"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="border-0 btn btn-outline-secondary btnn"><i class="bi bi-clock-history"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection

