<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ ('/template/dist/img/1.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">template</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/users" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              User
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/cast" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Cast
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/genre" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Genre
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/profile/create" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Profil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/film" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Film
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tabel
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tabel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/data-table" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
            <p>Data Tabel</p>
              </a>
            </li>
          </ul>
        </li>
      </nav>
    <!-- /.sidebar-menu -->
  </div>
