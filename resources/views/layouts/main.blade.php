<!doctype html>
<html lang="en" class="no-scrollbar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTaU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- Style Css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <title>Personal Blog | {{ $title }} </title>
    <link rel = "icon" href = "/img/logo.png" class="invert" type = "image/x-icon">
</head>

@if (array_key_exists('home', View::getSections()))
<body class="bg-[#5BC0F8] dark:bg-[#205295]">
@else
<body class="bg-slate-100 dark:bg-gray-800">
@endif

    @include('partials.navbar')

    @hasSection('home')
    <div class="mx-auto relative bg-bgi bg-no-repeat bg-100%">
        @yield('home')
    </div>
    @endif
    {{-- bg-gradient-to-tr from-cyan-500 to-blue-500 --}}
    <div class="container mx-auto bg bg-slate-100 dark:bg-gray-800">
        @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>


</body>

</html>
