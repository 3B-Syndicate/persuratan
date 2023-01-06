@extends('dosen.dosen_master')
@section('content')
<div class="content-wrapper" style="background: gray;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: #ffc107;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Dosen</h1>
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
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box" style="background: lightyellow;">
              <div class="inner">
                <h3>{{$SMCount}}</h3>

                <p>Surat Masuk</p>
              </div>
              <a href="#" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box" style="background: lightyellow;">
              <div class="inner">
                <h3>{{$NRCount}}</h3>

                <p>Notulensi Rapat</p>
              </div>
              <a href="#" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
