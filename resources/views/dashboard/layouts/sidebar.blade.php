<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse bg-dark">
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
    </div>
  </nav>
