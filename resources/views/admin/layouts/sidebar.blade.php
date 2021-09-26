<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning bg-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
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
        <a href="/dashboard/admin/{{ auth()->user()->id }}/edit" class="d-block">{{ auth()->user()->name }}</a>
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

        {{-- Administrator Menu --}}
        @if (auth()->user()->role == 'Dev')
        <li class="nav-item {{ (Request::is('dashboard/admin') or Request::is('dashboard/admin/*')) ? 'menu-open' : '' }}">
          <a class="nav-link">
            <p>
              ADMINISTRATOR
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/admin" class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                  Admins List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/admin/create" class="nav-link {{ Request::is('dashboard/admin/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-plus"></i>
                <p>
                  Add New Admin
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/admin/request" class="nav-link {{ Request::is('dashboard/admin/request') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-check"></i>
                <p>
                  Admin Request
                </p>
              </a>
            </li>
          </ul>
        </li>
        @endif

        {{-- Short Link Menu --}}
        <li class="nav-item {{ (Request::is('dashboard/shortlink') or Request::is('dashboard/shortlink/create')) ? 'menu-open' : '' }}">
          <a class="nav-link">
            <p>
              SHORT LINK
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
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
          </ul>
        </li>

        {{-- Member Menu --}}
        <li class="nav-item {{ (Request::is('dashboard/user') or Request::is('dashboard/renewal') or Request::is('dashboard/point')) ? 'menu-open' : '' }}">
          <a class="nav-link">
            <p>
              MEMBER
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Members List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/renewal" class="nav-link {{ Request::is('dashboard/renewal') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                  Renewal Data
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/point" class="nav-link {{ Request::is('dashboard/point') ? 'active' : '' }}">
                <i class="nav-icon fas fa-star"></i>
                <p>
                  Member Points
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/member" class="nav-link {{ Request::is('dashboard/member') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>
                  Member Status
                </p>
              </a>
            </li>
          </ul>
        </li>

        {{-- Article Menu --}}
        <li class="nav-item {{ (Request::is('dashboard/articles') or Request::is('dashboard/article') or Request::is('dashboard/article/create')) ? 'menu-open' : '' }}">
          <a class="nav-link">
            <p>
              ARTICLES
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/articles" class="nav-link {{ Request::is('dashboard/articles') ? 'active' : '' }}">
                <i class="nav-icon fas fa-fw fa-copy"></i>
                <p>
                  Articles List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/article" class="nav-link {{ Request::is('dashboard/article') ? 'active' : '' }}">
                <i class="nav-icon fas fa-fw fa-file-alt"></i>
                <p>
                  My Article
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/article/create" class="nav-link {{ Request::is('dashboard/article/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-fw fa-plus"></i>
                <p>
                  Create New Article
                </p>
              </a>
            </li>
          </ul>
        </li>

        {{-- Post Menu --}}
        <li class="nav-item {{ (Request::is('dashboard/post') or Request::is('dashboard/post/create')) ? 'menu-open' : '' }}">
          <a class="nav-link">
            <p>
              POSTS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/dashboard/post" class="nav-link {{ Request::is('dashboard/post') ? 'active' : '' }}">
                <i class="nav-icon fas fa-fw fa-copy"></i>
                <p>
                  Posts List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/post/create" class="nav-link {{ Request::is('dashboard/post/create') ? 'active' : '' }}">
                <i class="nav-icon fas fa-fw fa-plus"></i>
                <p>
                  Create New Post
                </p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>