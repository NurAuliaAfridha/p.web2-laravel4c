@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Makul</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('simpan.makul') }}">
                        @csrf
                        <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Kode Makul</label>
                            <div class="col-md-6">
                                <input type="text" name="kd_makul" class="form-control" placeholder="Masukkan Kode Makul">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">Nama Makul</label>
                            <div class="col-md-6">
                                <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Makul">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right">SKS</label>
                            <div class="col-md-6">
                                <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right"></label>
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">SAVE</button>
                                <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BACK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection