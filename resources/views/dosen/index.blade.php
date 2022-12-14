@extends('dosen.dosen_master')
@section('content')
<div class="content-wrapper" style="background: yellow;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: black;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-light">Dashboard Dosen</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="background: black;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box" style="background: yellow;">
              <div class="inner">
                <h3>10</h3>

                <p>Disposisi Masuk</p>
              </div>
              <a href="#" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box" style="background: yellow;">
              <div class="inner">
                <h3>7</h3>

                <p>Notulensi Rapat</p>
              </div>
              <a href="#" class="small-box-footer text-dark">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        </div>
        <!-- /.row (main row) -->
        <div class="row justify-content-md-center" style="background: yellow;">
          <div class="col-md-auto mt-3">
            <a class="btn btn-primary" href="#" role="button">Unggah Surat</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection