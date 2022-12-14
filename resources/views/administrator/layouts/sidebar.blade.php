      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/gambar-user/'.Auth::user()->gambar) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/dashboard" class="d-block">Halo, {{ Auth::user()->name}}!</a>
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
          <li class="nav-header">MENU UTAMA</li>
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/profil" class="nav-link @yield('profil')">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Profil</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="/admin/visualisasi" class="nav-link @yield('analisis-sentimen')">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Visualisasi</p>
            </a>
          </li> -->
          <li class="nav-header">DATA</li>
          <li class="nav-item @yield('open')">
            <a href="#" class="nav-link @yield('master-data')">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/data-laporan" class="nav-link @yield('data-laporan')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Laporan</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="/admin/data-testing" class="nav-link @yield('data-testing')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Testing</p>
                </a>
              </li> -->
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
