@extends('superadmin.superadmin_master')
@section('superadmin')
<div class="content-wrapper" style="background: yellow;">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background: yellow;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="content" style="text-colour: black;">Tambah User</h1> 
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
                        <form method="post" action="{{route('users.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Roles</label>
                                    <select name="selectUser" id="selectUser" class="form-select mb-3"
                                        aria-label="Default select example">
                                        <option selected="">Pilih Roles </option>
                                        <option value="admin">Super Admin</option>
                                        <option value="admin_jurusan">Admin Jurusan</option>
                                        <option value="kajur">Kajur</option>
                                        <option value="kaprodi">Kaprodi</option>
                                        <option value="dosen">Dosen</option>
                                    </select>
                                    <span class="text-danger text-bold">*</span> (<span class="text-warning text-bold">Wajib dipilih salah satu!</span>)
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputName" class="form-label">Username</label> 
                                            <div>
                                                <input type="text" name="textNama" class="form-control"
                                                    placeholder="Nama User" aria-label="textNama"
                                                    aria-describedby="basic-addon1" required>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Email
                                                            </label>
                                                            <input type="email" name="email" class="form-control"
                                                                id="email" aria-describedby="emailHelp" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" name="password"
                                                                id="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </section>
    <!-- /.content -->
</div>

@endsection
