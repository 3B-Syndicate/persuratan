<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color:#ffc107;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/images/logo_poliwangi.png')}}" alt="TI POLIWANGI" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TI POLIWANGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         
        <div class="info">
          <a href="#" class="d-block">
          {{ Auth::user()->name }}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-center" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('super.home')}}" class="nav-link active text-dark" style="background:yellow;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('user.view')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Jumlah User
              </p>
            </a>
          </li>
          <li class="nav-item fixed-bottom">
            <a href="{{route('logout')}}" class="nav-link bg-secondary" style="margin-left: 6px;">
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>