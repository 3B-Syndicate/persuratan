@extends('dosen.dosen_master')
@section('content')

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
            <a href="{{ route('dosen.home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('DosenSM.view')}}" class="nav-link active text-dark" style="background:lightgrey;">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Surat Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('DosenNR.view')}}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Notulensi Rapat
              </p>
            </a>
          </li>

          <li class="nav-item fixed-bottom  text-center">
            <a  href="{{route('logout')}}" class="nav-link bg-secondary" style="margin-left: 6px;">
              <p>Keluar</p>
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
                                        <th>Lampiran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($allSuratMasuk as $key=>$smasuk)
                                    <tr>
                                    <td>{{$key+1}}</td>
                                        <td>{{$smasuk->Nomor_Surat}}</td>
                                        <td>{{$smasuk->Tanggal_Surat}}</td>
                                        <td>{{$smasuk->Tanggal_Diterima}}</td>
                                        <td>{{$smasuk->Pengirim}}</td>
                                        <td>{{$smasuk->Perihal}}</td>
                                        <td>{{$smasuk->Disposisi}}</td>
                                        <td>{{$smasuk->Lampiran}}</td>
                                        <td>
                                        <div class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                                        Lihat
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
</div>

@endsection