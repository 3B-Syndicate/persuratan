<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:black;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/images/logo-poliwangi.png')}}" alt="TI POLIWANGI" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TI POLIWANGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->profile_photo_url}}" class="img-circle elevation-2" alt="{{Auth::user()->name }}">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          {{ Auth::user()->name }}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link active text-dark" style="background:yellow;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('disposisi_masuk.index') }}" class="nav-link" id="disposisi_masuk">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Disposisi Masuk
                <span class="right badge badge-danger">20</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('notulensi_rapat.index') }}" class="nav-link" id="notulensi_rapat">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Notulensi Rapat
              </p>
            </a>
          </li>

          <li class="nav-item fixed-bottom  text-center">
            <a  href="{{route('dosen.logout')}}" class="nav-link bg-secondary" style="margin-left: 6px;">
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>