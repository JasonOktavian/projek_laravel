{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse bg-white">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')? 'active':'' }}" href="/dashboard">
            <span class="align-text-bottom"><i class="bi bi-house"></i></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
            <span class="align-text-bottom"><i class="bi bi-card-text"></i></span>
            My Post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
            <span class="align-text-bottom"><i class="bi bi-images"></i></span>
            Gallery
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
            <span class="align-text-bottom"><i class="bi bi-envelope"></i></span>
            Message's
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
            <span class="align-text-bottom"><i class="bi bi-people-fill"></i></span>
            Friend's
          </a>
        </li>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            </span>
                admin
            <span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/categories*')? 'active':'' }}" href="/dashboard/categories">
                <span class="align-text-bottom"><i class="bi bi-grid"></i></span>
                Categories Management
              </a>
            </li>
        </ul>
        @endcan
    </div>
</nav> --}}
<div class="fixed sidebar overflow-hidden left-0 top-0 min-h-screen z-10 w-16 border-r dark:border-gray-700/50 border-gray-300/40 bg-white hover:w-56 hover:shadow-md dark:bg-black">
    <div class="flex h-screen flex-col justify-between pb-6">
        <div>
            <div class="w-max p-0 pt-0">
                {{-- <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="dark:invert inline-flex w-[60px]" viewBox="0 0 500.000000 530.000000">
                <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M1250 3746 c0 -2 39 -71 87 -153 48 -81 98 -169 112 -195 l26 -48
                1025 0 1025 1 111 192 c61 106 109 195 107 199 -4 8 -2493 11 -2493 4z"/>
                <path d="M1375 3203 c18 -49 420 -732 427 -725 13 13 221 377 221 387 0 6 -44
                88 -99 183 l-99 172 -229 0 c-213 0 -228 -1 -221 -17z"/>
                <path d="M2295 3063 c-50 -85 -88 -157 -87 -160 2 -3 -1 -9 -6 -12 -8 -5 -566
                -961 -608 -1044 l-15 -27 921 0 921 1 -35 62 c-19 34 -70 123 -113 197 l-79
                135 -449 2 c-248 2 -455 4 -462 5 -6 2 36 84 94 183 57 99 105 185 106 190 1
                6 5 12 8 15 13 10 152 255 152 268 0 6 4 12 8 12 8 0 189 313 189 326 0 3
                -102 4 -228 3 l-227 -1 -90 -155z m-125 -648 c0 -8 -4 -15 -10 -15 -5 0 -7 7
                -4 15 4 8 8 15 10 15 2 0 4 -7 4 -15z m204 -491 c3 -8 2 -12 -4 -9 -6 3 -10
                10 -10 16 0 14 7 11 14 -7z"/>
                <path d="M3139 3158 c-19 -35 -88 -154 -152 -266 -64 -111 -117 -209 -117
                -217 0 -8 -4 -15 -9 -15 -9 0 -181 -289 -181 -303 0 -4 103 -7 229 -7 l228 0
                241 418 c132 229 244 425 247 434 6 15 -12 17 -222 17 l-228 1 -36 -62z m235
                -146 c2 -4 -9 -15 -25 -24 -30 -17 -44 -12 -29 11 4 8 13 10 19 7 6 -4 11 -2
                11 3 0 13 17 15 24 3z"/>
                <path d="M2250 1686 c0 -2 23 -44 51 -94 39 -70 54 -90 67 -86 14 5 14 4 3 -4
                -12 -8 -3 -29 47 -114 33 -56 64 -111 68 -120 8 -24 17 -22 30 5 6 12 51 92
                101 177 50 85 100 174 112 198 l21 42 -250 0 c-137 0 -250 -2 -250 -4z"/>
                </g>
                </svg> --}}
                <img src="/img/logo.png" class="w-16 inline-flex invert dark:invert-0" alt="">
                <span class=" text-xl font-bold dark:text-white">Vilizer Blog</span>
            </div>
            <hr>
            <ul class="mt-6 space-y-2 tracking-wide">
                <li class="min-w-max hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-md">
                    <a class="bg group flex items-center space-x-4 rounded-full ps-1 pe-3 py-3 text-gray-600 {{ Request::is('dashboard/posts*')? 'relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white':'' }}" href="/dashboard/posts">
                        <div class="w-max flex items-center px-3 gap-4">
                            <i class="bi bi-card-text text-3xl dark:text-white h-7 w-7"></i>
                            <span class="text-lg font-bold dark:text-white font-sans ps-1">My Post's</span>

                        </div>
                    </a>
                </li>
                <li class="min-w-max hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-md">
                    <a class="bg group flex items-center space-x-4 rounded-full ps-1 pe-3 py-3 text-gray-600 {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
                        <div class="w-max flex items-center px-3 gap-4">
                            <i class="bi bi-images text-3xl dark:text-white h-7 w-7"></i>
                            <span class="text-lg font-bold dark:text-white font-sans ps-1">Gallery</span>
                        </div>
                    </a>
                </li>
                <li class="min-w-max hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-md">
                    <a class="bg group flex items-center space-x-4 rounded-full ps-1 pe-3 py-3 text-gray-600 {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
                        <div class="w-max flex items-center px-3 gap-4">
                            <i class="bi bi-envelope text-3xl dark:text-white h-7 w-7"></i>
                            <span class="text-lg font-bold dark:text-white font-sans ps-1">Message's</span>
                        </div>
                    </a>
                </li>
                {{-- <li class="px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-md">
                    <a class="block overflow-hidden whitespace-nowrap {{ Request::is('dashboard/posts*')? 'active':'' }}" href="/dashboard/posts">
                        <i class="bi bi-images text-3xl dark:text-white pe-3"></i>
                        <span class="overflow-hidden text-lg font-bold dark:text-white font-sans ps-1">Gallery</span>
                    </a>
                </li> --}}
            </ul>



            @can('admin')

            <hr class="mt-1">
            <span class="font-bold text-base px-2 py-2 overflow-hidden whitespace-nowrap">Admin Page</span>
            {{-- <h6 class="">
                <span class="dark:text-white text-base my-5 truncate">
                    Admin
                </span>
            </h6> --}}
            <ul class="mt-6 space-y-2 tracking-wide">
                <li class="min-w-max hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-md">
                    <a class="bg group flex items-center space-x-4 rounded-full ps-1 pe-3 py-3 text-gray-600 {{ Request::is('dashboard/categories*')? 'relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white':'' }}" href="/dashboard/categories">
                        <div class="w-max flex items-center px-3 gap-4">
                            <i class="bi bi-grid text-3xl dark:text-white h-7 w-7"></i>
                            <span class="text-lg font-bold dark:text-white font-sans ps-1">Categories</span>

                        </div>
                    </a>
                </li>
            </ul>
        </div>
         @endcan
        </div>
    </div>
</div>
