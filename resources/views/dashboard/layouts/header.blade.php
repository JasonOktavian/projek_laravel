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

  <nav class="navbar sticky-top mb-3">
    <a href="" class="navbar-brand col-lg-1 me-0 px-3 fs-6">Vilizer</a>
    <a href="" class="navbar-brand me-0 px-3 fs-6">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex flex-row-reverse">
        <div class="dropstart">
            <ul class="nav-item dropdown">
                <button class="nav-link btn-outline-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">action</a></li>
                    <li><a class="dropdown-item" href="#">another action</a></li>
                    <hr>
                    <li>
                      <form action="/logout" class="dropdown-item" method="post">
                          @csrf
                          <button type="submit" class="border-0">
                              <i class="bi bi-box-arrow-in-right"></i>
                              Logout
                          </button>
                      </form>
                    </li>
                </ul>
            </ul>
        </div>
        <h6>{{ auth::user()->name }}</h6>
    </div>
  </nav>





