@extends('superadmin.superadmin_master')
@section('superadmin')
<div class="content-wrapper" style="background: yellow;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: black;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-light">Jumlah User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="{{route('user.add')}}" style="float:right;
                                position: relative;
                                color: black" class="btn btn-mini btn-warning">Add User</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="background: black;">
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
                                        <th style="width: 10px">No</th>
                                        <th>Nama User</th>
                                        <th>Roles</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allDataUser as $key => $user)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->roles}}</td>
                                        <td>
                                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-info">Edit</a>
                                            <a href="{{route('user.delete', $user->id)}}" id="delete"
                                                class="btn btn-danger">Delete</a>
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
