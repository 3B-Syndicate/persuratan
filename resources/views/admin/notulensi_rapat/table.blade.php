@extends('admin.admin_master')
@section('admin')

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
          <a href="{{route('admin.home')}}" class="d-block">
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
            <a href="{{route('admin.home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-dark">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Surat Masuk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('smasuk.view')}}" class="nav-link text-dark">
                  <i class="fas fa-envelope nav-icon"></i>
                  <p>Daftar Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('smasuk.add')}}" class="nav-link text-dark">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Surat Masuk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-dark">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Surat Keluar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('skeluar.view')}}" class="nav-link text-dark">
                  <i class="fas fa-envelope-open nav-icon"></i>
                  <p>Daftar Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('skeluar.add')}}" class="nav-link text-dark">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Surat Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-dark active text-dark" style="background:lightgrey;">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Notulensi Rapat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('nrapat.view')}}" class="nav-link text-dark active text-dark" style="background:lightgrey;">
                  <i class="fas fa-envelope-open nav-icon"></i>
                  <p>Daftar Notulensi Rapat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nrapat.add')}}" class="nav-link text-dark">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Tambah Notulensi Rapat</p>
                </a>
              </li>
            </ul>
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

<div class="content-wrapper" style="background: grey;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Notulensi Rapat</h1>
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
                                        <th>Tanggal Rapat</th>
                                        <th>Ruang Rapat</th>
                                        <th>Perihal</th>
                                        <th>Tipe Rapat</th>
                                        <th>Validasi</th>
                                        <th>Notulensi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($AllNotulesiRapat as $key => $nrapat)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$nrapat->Nomor_Surat}}</td>
                                        <td>{{$nrapat->Tanggal_Rapat}}</td>
                                        <td>{{$nrapat->Ruang_Rapat}}</td>
                                        <td>{{$nrapat->Perihal}}</td>
                                        <td>{{$nrapat->Tipe_Rapat}}</td>
                                        <td>{{$nrapat->Validasi}}</td>
                                        <td>{{$nrapat->Notulensi}}</td>
                                        <td>
                                          <a href="{{route('nrapat.edit', $nrapat->id)}}" class="btn btn-success" title="Edit">
                                            <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="{{route('nrapat.delete', $nrapat->id)}}" id="delete" class="btn btn-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                          </a>
                                          <div class="btn btn-primary" data-toggle="dropdown" title="Opsi">
                                                <i class="fas fa-cog"></i>
                                                <div class="dropdown-menu" style="margin-right:3%;padding:3px;">
                                                    <a class="btn btn-primary" href="{{route('nrapat.show', $nrapat->id)}}">
                                                        <i class="fas fa-eye"></i>
                                                        Lihat
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </section>
    <!-- /.content -->
@endsection
