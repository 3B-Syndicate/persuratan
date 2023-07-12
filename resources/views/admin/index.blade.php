@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper" style="background: gray;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background: #007BFF;">
              <div class="inner">
                <h3>{{$SMCount}}</h3>
                <p>Surat Masuk</p>
              </div>
              <a href="{{route('skeluar.view')}}" style="background: lightyellow;" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background: #28A745;">
              <div class="inner">
                <h3>{{$SKCount}}</h3>
                <p>Surat Keluar</p>
              </div>
              <a href="{{route('skeluar.view')}}" style="background: lightyellow;" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background: #1DAEFF;">
              <div class="inner">
                <h3>{{$NRCount}}</h3>
                <p>Notulensi Rapat</p>
              </div>
              <a href="{{route('nrapat.view')}}" style="background: lightyellow;" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
