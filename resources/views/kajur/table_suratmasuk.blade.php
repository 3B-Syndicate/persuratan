@extends('kajur.kajur_master')
@section('kajur')

<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color:#ffc107;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/images/logo-TI_Poliwangi.png')}}" alt="TI POLIWANGI" class="brand-image img-circle elevation-3" style="opacity: .8">
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
        <ul class="nav nav-pills nav-sidebar flex-column text-center" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link ">
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kajurSM.view')}}" class="nav-link active text-dark" style="background:lightgrey;">
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kajurSK.view')}}" class="nav-link">
              <p>
                Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kajurNR.view')}}" class="nav-link">
              <p>
                Notulensi Rapat
              </p>
            </a>
          </li>
          <li class="nav-item fixed-bottom">
            <a href="{{route('superadmin.logout')}}" class="nav-link bg-secondary" style="margin-left: 6px;">
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<div class="content-wrapper" style="background: gray;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Table Surat Masuk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="background: #ffc107;">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">No</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Tanggal Surat Diterima</th>
                                        <th>Pengirim Surat</th>
                                        <th>Perihal</th>
                                        <th>Disposisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>
    <!-- /.content -->
</div>

@endsection
