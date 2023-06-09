@extends('dashboard.layouts.main')

@section('container')
<h1 class="text-xl font-bold text-center mb-3">Create New Post</h1>
<div class="grid grid-cols-3 gap-4">
<div class="bg-white rounded-md px-3 py-5 col-span-2">
    <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('title') is-invalid
                @enderror" value="{{ old('title') }}"/>
                <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- <input type="text" class="form-control @error('title') is-invalid
            @enderror" id="title" name="title" value="{{ old('title') }}"> --}}

        </div>
        <div class="mb-3">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="slug" id="slug" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('slug') is-invalid
                @enderror" placeholder=" " readonly value="{{ old('slug') }}" required />
                <label for="slug" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid
            @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}">

            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="category" class="sr-only">Choose a Category</label>
            <select id="category_id" name="category_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent
                border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
            {{-- <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select> --}}
        </div>
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">
                Upload file
            </label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 form-control @error('image') is-invalid
            @enderror" id="image" name="image" type="file" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            {{-- <label for="image" class="form-label">Upload Image</label>
            <img src="" class="img-preview img-fluid mb-4 col-sm5">
            <input class="form-control @error('image') is-invalid
            @enderror" type="file" name="image" id="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content's</label>
            @error('body')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>

        </div>

        <button type="submit" class="bg-green-500 px-3 py-2 rounded-md mb-5">Create Post</button>
</form>

</div>
<div class="bg-white rounded-md">
    <h1 class="text-xl font-light text-center block bg-blue-600 py-5 px-4 rounded-t-md">Image Preview</h1>
    <div class="justify-center items-center flex h-screen w-full">
        <img src="" class="img-preview w-3/4 rounded-md">
    </div>
</div>


</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(OfREvent){
            imgPreview.src = OfREvent.target.result;
        }
    }
</script>

@endsection
