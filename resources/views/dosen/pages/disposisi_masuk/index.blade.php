@extends('dosen.dosen_master')
@section('content')

<div class="content-wrapper" style="background: yellow;">
    <div class="col-md-12">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Disposisi Masuk</h3>
              </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
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
                    @foreach ($disposisi_masuk as $data)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->nomor_surat }}</td>
                      <td>{{ $data->tanggal_surat }}</td>
                      <td>{{ $data->tanggal_diterima }}</td>
                      <td>{{ $data->pengirim }}</td>
                      <td>{{ $data->perihal }}</td>
                      <td>{{ $data->disposisi }}</td>
                      <td>{{ $data->lampiran }} Halaman</td>
                  </tr>
                  @endforeach

                    <!-- <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
    </div>
          </div>
@endsection