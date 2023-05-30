@if (array_key_exists('home', View::getSections()))
{{-- <nav class="bg-inherit sticky top-0 z-50 border-b-2 border-blue-500 dark:border-blue-800"> --}}
<nav class="bg-[#5BC0F8] sticky top-0 z-50 shadow-md dark:bg-[#205295] dark:shadow-md">

@else
<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
@endif

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4">
        <div class="inline-flex">
            <a class="flex items me-3" href="/">
                <img src="img/logo.png" class="h-10 mr-3 invert dark:invert-0" alt="">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-950 dark:text-white">VZBlog</span>
            </a>
            @if (array_key_exists('home', View::getSections()))
            <button id="theme-toggle" type="button" class="text-inherit dark:text-white hover:bg-[#86E5FF] dark:hover:bg-[#144272] focus:outline-none focus:ring-4 focus:ring-[#86E5FF] dark:focus:ring-[#144272] rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
            @else
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
            @endif


        </div>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full lg:inline-flex md:w-auto" id="navbarNav">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-[#4942E4] md:p-0 dark:text-white md:dark:hover:text-[#FFF5B8] dark:hover:text-white {{ Request::is('about')? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500':'' }}" href="/about">About</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-[#4942E4] md:p-0 dark:text-white md:dark:hover:text-[#FFF5B8] dark:hover:text-white {{ Request::is('blog')? 'active':'' }}" href="/blog">Blog</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-[#4942E4] md:p-0 dark:text-white md:dark:hover:text-[#FFF5B8] dark:hover:text-white {{ Request::is('categories')? 'active':'' }}" href="/categories">Categories</a>
                </li>
            </ul>


            <ul class="lg:inline-flex">
            @auth()
            <li>
                <a class="block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-[#4942E4] md:p-0 dark:text-white md:dark:hover:text-[#FFF5B8] dark:hover:text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-circle"></i>
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"> <i class="bi bi-file-text"></i> Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-in-right"></i>
                            Logout
                        </button>
                    </form>
                </li>
                </ul>
              </li>

            @else
            <li>
                <a href="/login" class="block py-2 pl-3 pr-4 text-gray-900 rounded md:border-0 md:hover:text-[#4942E4] md:p-0 dark:text-white md:dark:hover:text-[#FFF5B8] dark:hover:text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" {{ ($active === "login") ? 'active': '' }}><i class="bi bi-box-arrow-in-right ms-4"></i> Login</a>
            </li>
            @endauth
            </ul>

        </div>
    </div>
</nav>
