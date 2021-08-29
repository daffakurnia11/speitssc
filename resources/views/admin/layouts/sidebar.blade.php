<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning bg-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="/img/logo_yellow.png" alt="SPE ITS SC Logo" class="brand-image">
    <span class="brand-text">SPE ITS SC Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Daffa Kurnia Fatah</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- Main Menu --}}
        <li class="nav-item">
          <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        {{-- Short Link Menu --}}
        <li class="nav-header">SHORT LINK</li>
        <li class="nav-item">
          <a href="/dashboard/shortlink" class="nav-link {{ Request::is('dashboard/shortlink') ? 'active' : '' }}">
            <i class="nav-icon fas fa-link"></i>
            <p>
              Short Links List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard/shortlink/create" class="nav-link {{ Request::is('dashboard/shortlink/create') ? 'active' : '' }}">
            <i class="nav-icon fas fa-plus"></i>
            <p>
              Create Link
            </p>
          </a>
        </li>

        {{-- Member Menu --}}
        <li class="nav-header">MEMBER</li>
        <li class="nav-item">
          <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Members List
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>