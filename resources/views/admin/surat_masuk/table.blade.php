@extends('admin.admin_master')
@section('admin')
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
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active text-dark" style="background:lightgrey;">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Surat Masuk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.surat_masuk.table')}}" class="nav-link text-dark active" style="background:lightgrey;">
                <i class="fas fa-envelope nav-icon"></i>
                  <p>Daftar Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.surat_masuk.create')}}" class="nav-link text-dark">
                <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Surat Masuk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Surat Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
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
                    <h1 class="m-0 text-dark">Surat Masuk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="{{route('admin.surat_masuk.create')}}" style="float:right; position: relative;" class="btn btn-mini btn-success text-light">Tambah Surat</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="background: #ffc107;">
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">No</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Tanggal Terima</th>
                                        <th>Pengirim</th>
                                        <th>Perihal Surat</th>
                                        <th>Jenis Disposisi</th>
                                        <th>Lampiran</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>JKH.09UI</td>
                                        <td>01/01/2000</td>
                                        <td>10/01/2000</td>
                                        <td>Politeknik Negeri Banyuwangi</td>
                                        <td>Sosialisasi Desain Grafis</td>
                                        <td>Biasa</td>
                                        <td>1 Halaman</td>
                                        <td>
                                            <a href="{{route('admin.surat_masuk.edit')}}" class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <div class="btn btn-primary" data-toggle="dropdown">
                                                <i class="fas fa-cog"></i>
                                                <div class="dropdown-menu" style="margin-right:3%;padding:3px;">
                                                    <a class="btn btn-primary">
                                                        <i class="fas fa-eye"></i>
                                                        Lihat
                                                    </a>
                                                    <a class="btn btn-primary">
                                                        <i class="fas fa-print"></i>
                                                        Cetak
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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