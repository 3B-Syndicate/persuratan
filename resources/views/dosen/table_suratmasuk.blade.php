@extends('dosen.dosen_master')
@section('content')

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