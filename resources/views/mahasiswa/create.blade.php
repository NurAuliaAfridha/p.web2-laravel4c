@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('mahasiswa.store') }}">
                        @csrf
                        <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Telepon</label>
                            <div class="col-md-6">
                                <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Alamat</label>
                            <div class="col-md-6">
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Photo</label>
                            <div class="col-md-6">
                                <input type="file" name="foto" class="form-control" placeholder="Masukkan Photo">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right"></label>
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">SAVE</button>
                                <a href="" class="btn btn-md btn-danger">BACK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection