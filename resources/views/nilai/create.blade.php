@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('simpan.nilai') }}">
                        @csrf
                        <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Nama Mahasiswa</label>
                            <div class="col-md-6">
                            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                    <option value="" disabled selected>Pilih Mahasiswa</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id }}" > {{ $u->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Nama MataKuliah</label>
                            <div class="col-md-6">
                            <select name="makul_id" id="makul_id" class="form-control">
                                    <option value="" disabled selected>Pilih MataKuliah</option>
                                    @foreach ($makul as $mk)
                                    <option value="{{ $mk->id }}" > {{ $mk->nama_makul }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="" class="col-md-4 text-md-right">Nilai</label>
                            <div class="col-md-6">
                                <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai" maxlength="8">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 text-md-right"></label>
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">SAVE</button>
                                <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BACK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection