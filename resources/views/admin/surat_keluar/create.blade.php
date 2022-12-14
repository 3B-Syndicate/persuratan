@extends('admin.admin_master')
@section('admin')

<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color:#ffc107;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('assets/images/logo-TI_Poliwangi.png')}}" alt="TI POLIWANGI"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TI POLIWANGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Auth::user()->profile_photo_url}}" class="img-circle elevation-2"
                    alt="{{Auth::user()->name }}">
            </div>
            <div class="info">
                <a href="{{route('dashboard')}}" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-center" data-widget="treeview" role="menu"
                data-accordion="false">
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
                    <a href="#" class="nav-link text-dark">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Surat Masuk
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <i class="fas fa-envelope nav-icon"></i>
                                <p>Daftar Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Surat Masuk</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active text-dark" style="background:lightgrey;">
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
                            <a href="{{route('skeluar.add')}}" class="nav-link active text-dark" style="background:lightgrey;">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Tambah Surat Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                        <p>
                            Notulensi Rapat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Notulensi Rapat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Notulensi Rapat</p>
                            </a>
                        </li>
                    </ul>
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

<div class="content-wrapper" style="background: grey;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="content" style="text-colour: black;">Tambah Surat Keluar</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <form method="post" action="{{route('skeluar.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-1">
                                        <div class="form-group row">
                                            <label for="tanggalSurat" class="col-sm-2 col-form-label">Tanggal
                                                Surat</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tanggal_surat" class="form-control"
                                                    id="tanggal_surat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-group row">
                                            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="perihal" class="form-control" id="perihal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-group row">
                                            <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="prodi" class="form-control" id="prodi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-group row">
                                            <label for="kepada" class="col-sm-2 col-form-label">Kepada</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kepada" class="form-control" id="kepada">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-group row">
                                            <label for="disposisi" class="col-sm-2 col-form-label">Disposisi</label>
                                            <div class="col-sm-10">
                                                <select name="disposisi" id="disposisi" class="form-control">
                                                    <option selected="">Pilih Jenis disposisi</option>
                                                    <option value="Rahasia">Rahasia</option>
                                                    <option value="penting">Penting</option>
                                                    <option value="biasa">Biasa</option>
                                                </select> 
                                              </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection
