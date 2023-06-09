{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Vilizer Blog</a>
    <a class="navbar-brand me-0 px-3 fs-6" href="#">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-50 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">


    <h6 class="text-white">{{ auth::user()->name }}</h6>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <div class="nav-item dropdown text-nowrap">
            <button class="btn btn-primary dropdown-toggle"  data-bs-toggle="dropdown">
            </button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">


                        <form action="/logout" class="dropdown-item" method="post">
                            @csrf
                            <button type="submit" class="border-0">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Logout
                            </button>
                        </form>


                    </li>
                </ul>
          </div>
        </div>
    </div>
  </header> --}}

{{-- Header --}}
<header class="w-[calc(100%-3.73rem)] ml-auto sticky top">
    <div class="2xl:container mx-auto space-y-6 bg-white dark:bg-black shadow-sm max-w-screen-xl flex flex-wrap justify-end animate">
        <div class="h-16 border-gray-300/40 dark:border-gray-700/50">
            <div class="inline-flex items-center min-h-full">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-2">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
                <button class="flex items me-3 inset-y-0 right-0" id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button">
                    <img src="/img/icon.jpg" class="h-8 mr-3 rounded-full border-[3px] border-black dark:border-white" alt="">
                    <span class="self-center text-base font-semibold whitespace-nowrap text-blue-950 dark:text-white">{{ Auth::user()->name }}<i class="bi bi-caret-down-fill"></i></span>
                </button>
                <div id="dropdown" class="hidden z-auto bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="bi bi-display"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="bi bi-gear-fill"></i> Settings</a>
                    </li>
                    {{-- <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li> --}}
                    <li>
                        {{-- <a href="#" class="">Sign out</a> --}}
                        <form action="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" method="post">
                            @csrf
                            <button type="submit">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>




