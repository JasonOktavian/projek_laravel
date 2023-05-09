@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}, Posts</h1>
</div>

<div class="d-flex justify-content-center">
<div class="table-responsive col-lg-8">
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
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-dark px-2"><span class="bi bi-book"></span></a>
                    <a href="/dashboard/posts/" class="badge bg-dark px-2"><i class="bi bi-trash"></i></a>
                    <a href="/dashboard/posts/" class="badge bg-dark px-2"><i class="bi bi-clock-history"></i></a>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
</div>

