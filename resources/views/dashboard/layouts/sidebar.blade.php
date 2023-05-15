<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse bg-white">
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

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            </span>
                Admin
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
  </nav>
