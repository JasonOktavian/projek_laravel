@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}, Posts</h1>
</div>

@if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
</div>
@endsection

