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
        <li class="nav-item">
          <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">SHORT LINK</li>
        <li class="nav-item">
          <a href="/admin/shortlink" class="nav-link {{ Request::is('admin/shortlink') ? 'active' : '' }}">
            <i class="nav-icon fas fa-link"></i>
            <p>
              Short Link Lists
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/shortlink/create" class="nav-link {{ Request::is('admin/shortlink/create') ? 'active' : '' }}">
            <i class="nav-icon fas fa-plus"></i>
            <p>
              Create Link
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>